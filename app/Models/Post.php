<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['name','description'];
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
