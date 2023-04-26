<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'AzartPlanet Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('xdemonx1234'),
            'image' => 'default.png'
        ]);

        $admin->roles()->attach($adminRole);
    }
}
