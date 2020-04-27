<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    protected $table='murid';
    protected $fillable=['nis','nama','email','username','password'];
}
