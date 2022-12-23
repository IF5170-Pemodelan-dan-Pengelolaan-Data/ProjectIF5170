<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'leave';
    protected $fillable   = [
        '_id', 'date_from', 'date_to', 'request_date',
        'employee_id', 'branch_manager_id', 'type', 'approval_status'
    ];
}
