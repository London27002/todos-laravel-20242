<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Task::with(['project', 'user'])->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        Log::debug($request->all());
        $task = new Task($request->all());
    
      
        // $task = new Task();
        // $task-> task_name = $request->task_name;
        // $task-> task_description = $request->task_description;
        // $task-> task_is_done = $request->task_is_done;
        // $task-> task_observation = $request->task_observation;
        $task->save();
        return $task;

    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //$task = Task::findOrFail($id);
        return $task ->load(['project', 'user']); //eager loading
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        // return "Task with id $id updated";
        // $task->task_name = $request->task_name ?? $task->task_name;
        // $task->task_description = $request->task_description ?? $task->task_description;
        // $task->task_is_done = $request->task_is_done ?? $task->task_is_done;
        // $task->task_observation = $request->task_observation ?? $task->task_observation;
        // $task->save();
        // return $task;
        $task-> update($request->all());
        return $task;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task ->delete();
        return response()->json(['message' => 'Task deleted'], 200);
    }
}
