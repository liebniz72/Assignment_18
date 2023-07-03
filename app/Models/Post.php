<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['title', 'content', 'category_id'];
    
    // Define the relationship with the "Category" model
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //problem 6
public static function getTotalPostsByCategoryId($categoryId)
{
    return self::where('category_id', $categoryId)->count();
}
//problem 8
public static function getSoftDeletedPosts()
{
    return self::onlyTrashed()->get();
}

}



