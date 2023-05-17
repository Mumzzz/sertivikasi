<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;
    protected $table = 'registrasi';
    public $timestamps = false;
    function jk()
    {
        return $this->belongsTo(Jk::class);
    }
    function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
