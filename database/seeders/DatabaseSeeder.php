<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        Event::create([
            'title' => 'Putus atau Terus 1',
            'quota' => 150,
            'location' => 'Ciputra World Mall 2nd floor',
            'description' => 'YESS Surabaya Valentine\'s Day Celebration "Putus atau Terus"...',
            'start_date' => '2024-03-30',
            'start_time' => '16:30',
            'end_date' => '2024-03-30',
            'end_time' => '19:30',
            'image_path' => 'img/event-photo1.jpg',
            'archived' => false,
            'type' => 'umum'
        ]);
        
    }
}
