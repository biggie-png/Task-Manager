<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return response()->json(['data'=>$tasks]);

    }
    public function show(Request $request) {
        $id = $request->input('id');
        $task_id =Task::findOrFail("{$id}");
        return response()->json([
            'data'=>$task_id
        ]);
    }
}
