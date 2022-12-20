<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Pegawai extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'employee';
}
