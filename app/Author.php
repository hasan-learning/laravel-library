<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $fillable = [
        'name', 'email', 'phone', 'address'
    ];
}
