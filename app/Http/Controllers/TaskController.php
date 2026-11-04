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
    public function show($sid) {
        $id = $sid;
        $task_id =Task::find($id);
        return response()->json([
            'data'=>$task_id
        ]);
    }
}
