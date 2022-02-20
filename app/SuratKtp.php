<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKtp extends Model
{
    protected $table = 'tbl_data_surat_ktp';
    protected $fillable = [
        'warga_id','nama','nik','tempat_lahir','tanggal_lahir','kelamin','agama','status','pekerjaan','alamat','jenis_surat','file_surat','wa'
    ];
}
