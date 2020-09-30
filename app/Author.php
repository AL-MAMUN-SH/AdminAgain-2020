<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
   protected $fillable = [
     'name',
     'email',
     'phone',
     'address',
     'image',
     'total_post',
   ];
}
