<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    const TODO = 1;
    const DOING = 2;
    const DONE = 3;

    protected $fillable = [
      'title', 'description', 'status', 'user_id'
    ];

    public function assignedUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function scopeSortByStatus($q)
    {
        $order = [Task::DOING, Task::TODO, Task::DONE];

        return $q->orderBy('title')
            ->get()
            ->sort(function ($a, $b) use($order) {
                $pos_a = array_search($a->status, $order);
                $pos_b = array_search($b->status, $order);
                return $pos_a - $pos_b;
            }
        );
    }
}
