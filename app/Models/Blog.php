<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'text', 'cat_id'];

    protected $guarded = ['id'];

    public $timestamps = false;

    public function category(){
        return $this->hasOne(Category::class, 'id', 'cat_id');
    }
}
