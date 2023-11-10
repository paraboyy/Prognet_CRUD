<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    protected $fillable = ['nama', 'jabatan'];
    protected $table = 'pekerja';
    use HasFactory;
}
