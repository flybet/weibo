<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = factory(User::class)->times(50)->make();
        User::insert($user->makeVisible(['password','remember_token'])->toArray());
        $user = User::find(1);
        $user->name= 'hadson';
        $user->email='hadson@hadson.com';
        $user->password=bcrypt('123456');
        $user->is_admin =true;
        $user->save();
    }
}
