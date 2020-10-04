<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class requests extends Model
{
    //
     protected $connection = 'mongodb';
    protected $collection = 'requests';
    
    protected $fillable = [
        'status', 'product'
    ];
}
