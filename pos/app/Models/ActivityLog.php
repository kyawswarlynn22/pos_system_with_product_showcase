<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $table = 'audits';

    public function getMetadata()
    {
       return $audits = ActivityLog::orderBy('id','desc')->get();
    }
}
