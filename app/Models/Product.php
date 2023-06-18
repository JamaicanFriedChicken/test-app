<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $table = 'products';
    
    protected $fillable = [
        'title', 'description'
    ];
}
