<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Nurse extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'employee_nurse';
}
