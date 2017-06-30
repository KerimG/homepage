<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogEntry extends Model
{
    protected $fillable = ['title', 'slug', 'text', 'last_modified'];
}
