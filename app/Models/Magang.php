<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    use HasFactory;
    protected $primary_key = 'magang_id';
    protected $fillable = [
        'name',
        'day_operation',
        'time_operation',
        'description',
        'photo_path',
        'total_joined'
    ];
}
