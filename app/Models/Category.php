<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    
    // Define the relationship with the "Post" model
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    //problem 11
    public function latestPost()
    {
    return $this->hasOne(Post::class)->latest();
}
}

