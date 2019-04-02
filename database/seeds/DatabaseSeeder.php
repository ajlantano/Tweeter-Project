<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        function generateBody() {
            $count = mt_rand(8,30);
            $text = '';
            for ($i=0; $i<$count; $i++){
                $text .= Str::random(2,10) . ' ';
            }
            return $text;
        }

        $this->call(UsersTableSeeder::class);
        $this->call(TweetsTableSeeder::class);
        $this->call(ProfileTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(LikesTableSeeder::class);
        $this->call(FollowersTableSeeder::class);

    }
}
