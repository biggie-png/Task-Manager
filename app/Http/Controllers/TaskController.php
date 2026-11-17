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
    public function show(Request $request,int $id) {
        
        $task_id =Task::findorfail($id);
        return view('/tasks/show',compact('task_id'));
    }

}
