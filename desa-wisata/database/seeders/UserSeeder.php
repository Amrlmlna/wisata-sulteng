<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->id = 1;
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->role = "super_admin";
        $user->password = Hash::make('admin123');
        $user->save();

        $user = new User();
        $user->id = 2;
        $user->name = 'mimin';
        $user->email = 'mimin@gmail.com';
        $user->role = "admin";
        $user->password = Hash::make('mimin123');
        $user->save();

        $user = new User();
        $user->id = 3;
        $user->name = 'mashaq';
        $user->email = 'mashaq@gmail.com';
        $user->role = "owner";
        $user->password = Hash::make('mashaq123');
        $user->save();

        $user = new User();
        $user->id = 4;
        $user->name = 'fadil';
        $user->email = 'fadil@gmail.com';
        $user->role = "writer";
        $user->password = Hash::make('fadil123');
        $user->save();

        $user = new User();
        $user->id = 5;
        $user->name = 'owner';
        $user->email = 'owner@gmail.com';
        $user->role = "owner";
        $user->password = Hash::make('owner123');
        $user->save();
    }
}
