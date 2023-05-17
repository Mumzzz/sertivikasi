<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    public $timestamps = false;
    function registrasi()
    {
        // has many adalah one to many
        return $this->hasMany(Registrasi::class);
    }
}
