<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::insert([
            [
                'title' => 'Project Event Management',
                'description' => 'Task Regarding Interview',
                'date' => '2024-10-2',
                'time' => '10:30',
                'location' => 'Kathmandu',
                'category_id' => 2, // Workshop
            ],
            [
                'title' => 'Tech Conference 2024',
                'description' => 'A conference about future technology trends.',
                'date' => '2024-11-15',
                'time' => '10:00',
                'location' => 'Pokhara',
                'category_id' => 1, // Conference
            ],
            [
                'title' => 'Leadership Seminar',
                'description' => 'A seminar on leadership and management skills.',
                'date' => '2024-12-01',
                'time' => '11:30',
                'location' => 'Bhaktapur',
                'category_id' => 3, // Seminar
            ],
            [
                'title' => 'Laravel Workshop',
                'description' => 'A hands-on workshop on Laravel framework.',
                'date' => '2024-11-05',
                'time' => '11:00',
                'location' => 'Kathmandu',
                'category_id' => 2, // Workshop
            ],
            [
                'title' => 'Health & Wellness Seminar',
                'description' => 'A seminar focused on health and wellness strategies.',
                'date' => '2024-11-20',
                'time' => '15:30',
                'location' => 'Lalitpur',
                'category_id' => 3, // Seminar
            ]
        ]);
    }
}
