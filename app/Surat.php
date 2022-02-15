<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'tbl_surat';
    protected $fillable = [
        'warga_id','jenis_surat','file_surat'

    ];
}
