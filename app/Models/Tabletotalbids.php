<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabletotalbids extends Model
{
    use HasFactory;

    // define table name
    protected $table = 'table_total_bids';

    protected $fillable = [
        'job_id', 'bid_amount', 'description', 'user_id', 'status'
    ];
}
