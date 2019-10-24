<?php

namespace App\Repositories;

use App\Http\Resources\TaskResource;
use App\Repositories\Interfaces\TaskRepositoryInterface;
use App\Task;


class TaskRepository implements TaskRepositoryInterface
{
    /**
     * @param $data
     * @return Tasks
     */
    public function create($data)
    {
        $task = new \App\Task();
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->status = $data['status'];
        $task->user_id = $data['user_id'];
        $task->save();

        return new TaskResource($task);
    }
}
