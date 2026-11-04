<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\task;

class taskseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        task::create([
            'title' => 'Learn Laravel',
            'status' => 'TODO',
            'priority' => 'HIGH'

        ]);
    }
}
