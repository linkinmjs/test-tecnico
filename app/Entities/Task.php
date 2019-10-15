<?php

namespace TaskApp\Entities;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
    protected $table = 'tasks';

    protected $fillable = ['title', 'description', 'category_id', 'is_compleated'];

    public function category()
    {
        return $this->belongsTo('TaskApp\Entities\Category');
    }

}
