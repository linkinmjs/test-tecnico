<?php

namespace TaskApp\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{

    protected $table = 'categories';
	

    protected $fillable = ['name','description','color', 'is_active', 'slug'];

}
