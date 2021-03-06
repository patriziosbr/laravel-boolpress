<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Post extends Model
{
    protected $fillable = [
        'title',
        'author',
        'slug',
        'content',
        'post_date',
        'category_id',
        'cover'
    ];
    public function category(){
        //relazione
        return $this->belongsTo('App\Category');
    }
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
