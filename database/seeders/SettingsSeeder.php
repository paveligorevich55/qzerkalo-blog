<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = Settings::create([
            'title' => 'My First Laravel App',
            'description' => 'There is place for Description',
            'logo' => 'project/images/default-logo.png',
            'favicon' => 'favicon.png',
        ]);
    }
}
