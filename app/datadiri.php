<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datadiri extends Model
{
    protected $table = 'murid';
    protected $fillable = ['nis','nama','email','rombel','rayon'];
}
