<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $GLOBALS['tweetCount'] = (int)$this->command->ask('How many tweets?');
        $this->command->info('Generating ' . $GLOBALS['tweetCount'] . ' Tweets');
        $tweets = factory(App\Tweet::class, $GLOBALS['tweetCount'])->create();
        $this->command->info('Tweets created!');
    }
}
