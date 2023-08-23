<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Bid extends Model
{
    use HasFactory;
    protected $table = 'bids';
    protected $guarded = [];

}
