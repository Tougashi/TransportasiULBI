<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'title', 'thumbnail','slug','body','excerpt','image','date','userId','categoryId','date'
    ];
    protected $nullable = ['views'];

    public function author(){
        return $this->belongsTo(\App\Models\User::class, 'userId');
    }

    public function category(){
        return $this->belongsTo(\App\Models\Category::class, 'categoryId');
    }
}
