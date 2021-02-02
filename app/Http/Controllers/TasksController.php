<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    /**
     * store a new course.
     *
     * @param mixed $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $task = Task::create([
            'name' => $request->input('name'),
            'complete' => $request->input('complete'),
            'school' => $request->input('school'),
        ]);

        return $task;
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $task->name = $request->input('name');
        $task->save();

        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(['success' => true]);
    }
}