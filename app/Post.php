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
   public function category(){
       return $this->belongsTo(Category::class);
   }
   public function author(){
       return $this->belongsTo(Author::class);
   }
}
