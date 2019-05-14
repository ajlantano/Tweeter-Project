<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;

class ProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \App\User::find($id);
        return view ('profiles.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\User::find($id);
        return view ('profiles.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'location' => 'required|max:30',
            'birthday' => 'required|date',
            'bio' => 'required|max:400'
        ]);

        $user = \App\User::find($id);
        $profile = $user->profile;

        $profile->location = $request->location;
        $profile->website = $request->website;
        $profile->bio = $request->bio;
        $profile->birthday = $request->birthday;

        $request->validate([
            'avatar' => 'image|mimes:jpeg,jpg,pn,gif|max:2048'
        ]);

        foreach($request->except(['_method', '_token', 'avatar']) as $k=>$v){
            $profile->$k = $v;
        }

        if($request->file('avatar')){
            $image = $request->file('avatar');
            $new_name = uniqid().'.'.$image->getClientOriginalExtension();
            Storage::disk('s3')->put("/avatars/" . $id . '/' . $new_name, file_get_contents($image),'public');
            $profile->avatar = $new_name;
        } else {
            $profile->avatar = null;
        }

        if ($profile->save()){
            return redirect('/profiles/' . $id);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function suggest(){
         //get an array of ID's of people user already follows
         $following = Auth::user()->following->pluck('id')->toArray();

         //add current user to following list so they aren't suggested
         // to follow themselves
         array_push($following, Auth::id());

         $suggested = \App\User::whereNotIn('id',$following)->inRandomOrder()->limit(10)->get();
         return view('profiles.suggested',['users' => $suggested]);

     }

     public function followers($id){
         $user = \App\User::with('followers')->find($id);
         return view('profiles.followers', compact('user'));

     }
     public function following($id){
         $user = \App\User::with('followers')->find($id);
         return view ('profiles.following', compact('user'));
     }

     public function follow(Request $request, $leader_id){
         $follow = DB::table('followers')->insert([
             'leader_id' => $leader_id,
             'follower_id' => Auth::id()
         ]);

         if($follow){
             $user = \App\User::find($leader_id);
             $request->session()->flash('message','You are now following ' . $user->name);
             return redirect(url()->previous());
         }
         dd('Unspecified error');
     }

     public function unfollow(Request $request, $leader_id){
         $delete = DB::table('followers')->where([
             ['leader_id', $leader_id],
             ['follower_id', Auth::id()]
         ])->delete();
         if($delete){
             $user = \App\User::find($leader_id);
             $request->session()->flash('message', 'You are not following ' . $user->name . ' anymore, Thankfully!');
             return redirect(url()->previous());
         }
         dd('Unspecified error');
     }

}
