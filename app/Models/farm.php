<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farm extends Model
{
    use HasFactory;

    protected $fillable = [
        'kepala_kandang',
        'nama_kandang',
        'status kandang'
    ];
}
