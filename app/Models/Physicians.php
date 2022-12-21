<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Physicians extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'employee_physicians';
}
