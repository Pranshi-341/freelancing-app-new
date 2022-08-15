<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publishjobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'owner_id',
        'subject',
        'topic',
        'pages',
        'deadline',
        'file',
        'instructions',
        'status',
        'budget',
    ];
}
