<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $GLOBALS['userCount'] = (int)$this->command->ask('How many Users?');
        $this->command->info('Generating ' . $GLOBALS['userCount'] . ' Users');
        $users = factory(App\User::class, $GLOBALS['userCount'])->create();
        $this->command->info('Users created!');
    }
}
