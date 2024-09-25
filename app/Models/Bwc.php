<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bwc extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial',
        'filename', 
        'hash'
    ];
}
