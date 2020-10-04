<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Requst extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $table = 'requsts';
    
    protected $fillable = [
         'status','flightNumber'
    ];
}
