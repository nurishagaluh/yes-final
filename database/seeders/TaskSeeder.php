<?php

namespace Database\Seeders;

use App\Models\Task;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dueDate = new DateTime('tomorrow');
        $timestamp = date('Y-m-d H:i:s', time());
        $data = [
            [
                'name' => 'Task 1',
                'description' => 'Desc 1',
                'assigned_to' => 'user 1',
                'due_date' => $dueDate->format('Y-m-d'),
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'name' => 'Task 2',
                'description' => 'Desc 2',
                'assigned_to' => 'user 2',
                'due_date' => $dueDate->format('Y-m-d'),
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ]
        ];
        Task::insert($data); //Task adalah nama file
    }
}
