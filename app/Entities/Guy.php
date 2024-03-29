<?php

namespace TaskApp\Entities;

use Illuminate\Database\Eloquent\Model;

class Guy extends Model
{

    protected $table = "guys";

    protected $fillable = ['name','position','task_id'];

    public function task()
    {
        return $this->belongsTo('TaskApp\Entities\Task');
    }

}