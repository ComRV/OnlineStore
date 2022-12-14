<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function club() {
        return $this->belongsTo(Club::class, 'club_id');
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }
}
