<?php

namespace Database\Seeders;

use App\Models\Task; // <-- Import Task Model
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        // Task::create([
        //     'title' => 'Belajar Laravel Migration',
        //     'description' => 'Membuat struktur tabel tasks.',
        //     'is_completed' => true // Tugas ini sudah selesai
        // ]);
        Task::factory()->count(20)->create(); // <-- Menggunakan factory untuk membuat 20 data task
    }
}