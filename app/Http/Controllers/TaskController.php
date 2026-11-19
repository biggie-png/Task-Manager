<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Nette\Schema\Message;

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
    public function store(Request $request ){
        $new_task=  $request->Validate([
            'title'=>'required|max:100|min:0',
            'description'=>'required|max:500:nullable',
            'status'=>'required|in:TODO,IN_PROCESS,DONE',
            'priority'=>'required|in:HIGH,MEDIUM,LOW',
            'due_date'=>'required|date|nullable'
        ]);
        Task::create($new_task);
        return response()->json([
            'Message'=>'บันทึกสำเร็จ'
        ]);

    }

}
