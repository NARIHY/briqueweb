<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'media',
        'info'
    ];
    /*
        info is the visibility of the blog
        1 = Publied
        0 = Not Publied
    */
}
