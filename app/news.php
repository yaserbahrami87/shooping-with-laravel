<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable = [
        'titrnews', 'textnews', 'author','summary','category','img','tags'
    ];
}
