<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            if ($user->email == 'adminRaihan@gmail.com') {
                $user->role = 'admin';
            } else {
                $user->role = 'user';
            }
            $user->save();
        }
    }
}
