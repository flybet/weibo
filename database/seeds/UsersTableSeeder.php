<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
