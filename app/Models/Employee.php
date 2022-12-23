<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'employee';


    public function leave()
    {
        return $this->hasMany(Leave::class);
    }
    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
