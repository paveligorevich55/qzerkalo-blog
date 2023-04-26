<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'Administrator')->first();
        $editorRole = Role::where('name', 'Editor')->first();
        $userRole = Role::where('name', 'User')->first();
	    $authorRole = Role::where('name', 'Author')->first();

        $admin = User::create([
            'username' => 'Administrator',
            'name' => 'Administrator',
            'email' => 'admin@email.com',
            'password' => Hash::make('xdemonx1234'),
            'image' => 'default.png'
        ]);

        $admin->roles()->attach($adminRole);
    }
}
