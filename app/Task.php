<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
      'title', 'description', 'status', 'user_id'
    ];

    public function assignedUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
