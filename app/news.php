<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{

    protected $fillable = [
        'titrnews', 'textnews', 'id_user','summary','category','img','tags','created_at'
    ];


    public function user()
    {
        return $this->belongsTo('App\User','id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
