<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class WorkUnit extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'work_unit';
}
