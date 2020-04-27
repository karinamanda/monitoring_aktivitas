<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setjadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['hari','tanggal','mulai','akhir','aktivitas','implementasi'];
}
