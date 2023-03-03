<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMagang extends Model
{
    use HasFactory;

    protected $table = 'data_magang';
    protected $fillable = ['nis','magang_id'];

}
