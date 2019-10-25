<?php

namespace App\Repositories;

use App\Http\Resources\TaskResource;
use App\Http\Resources\TaskResourceCollection;
use App\Repositories\Interfaces\TaskRepositoryInterface;
use App\Task;


class TaskRepository implements TaskRepositoryInterface
{
    /**
     * @param $request
     * @return TaskResource
     */
    public function create($request)
    {
        $task = new Task();
        $task->title = $request['title'];
        $task->description = $request['description'];
        $task->status = $request['status'];
        $task->user_id = $request['user_id'];
        $task->save();

        return new TaskResource($task);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return new TaskResource(Task::findOrFail($id));
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return new TaskResourceCollection(Task::all());
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return new TaskResource($task);
    }

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function update($request, $id)
    {
        $task = Task::findOrFail($id);
        $task->title = $request['title'];
        $task->description = $request['description'];
        $task->status = $request['status'];
        $task->save();

        return new TaskResource($task);
    }
}
