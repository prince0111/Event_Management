<?php

namespace Database\Seeders;

use App\Models\Attendee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attendee::insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'event_id' => 1, // Tech Conference
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'event_id' => 2, // Project Event Management
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael@example.com',
                'event_id' => 3, // Leadership Seminar
            ],
            [
                'name' => 'Emily Brown',
                'email' => 'emily@example.com',
                'event_id' => 2, // Laravel Workshop
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david@example.com',
                'event_id' => 1, // Health & Wellness Seminar
            ]
        ]);
    }
}
