<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'tb_guru';
    protected $guarded = [];
    protected $fillable = ['kode_guru', 'nama_guru', 'tlp_guru'];
}
