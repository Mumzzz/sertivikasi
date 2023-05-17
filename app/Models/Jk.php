<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jk extends Model
{
    use HasFactory;
    protected $table = 'jk';
    public $timestamps = false;
    function registrasi()
    {
        // has many adalah one to many
        return $this->hasMany(Registrasi::class);
    }
}
