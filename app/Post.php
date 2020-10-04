<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = [
     'category_id',
     'author_id',
     'name',
     'title',
     'details',
     'image',
     'total_read',
     'is_featured',
     'status',
   ];
}
