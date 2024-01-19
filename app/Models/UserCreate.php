<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCreate extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'asal_smp',
        'jenis_kelamin',
        'minat_jurusan'
    ];
}
