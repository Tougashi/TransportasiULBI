<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'title', 'thumbnail','slug','body','excerpt','date','userId','categoryId'
    ];
    protected $nullable = ['views'];

    public function author(){
        return $this->belongsTo(\App\Models\User::class, 'userId');
    }

    public function category(){
        return $this->belongsTo(\App\Models\Categories::class, 'categoryId');
    }
}
