<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class Taskseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks=[[
            'title' => 'Learn Laravel',
            'status' => 'TODO',
            'priority' => 'HIGH'
        ],[
            'title' => 'Practice PHP',
            'status' => 'IN_PROGRESS',
            'priority' => 'MEDIUM'

        ],[
            'title' => 'Build Task Manager',
            'status' => 'TODO',
            'priority' => 'HIGH'

        ],[
            'title' => 'Learn JavaScript',
            'status' => 'DONE',
            'priority' => 'LOW'

        ],[
            'title' => 'Review Database',
            'status' => 'TODO',
            'priority' => 'MEDIUM'

        ]


        ];
        foreach($tasks as $task){
            Task::create($task);
        }
    }
}
