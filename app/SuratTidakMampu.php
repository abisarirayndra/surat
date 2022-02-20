<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratTidakMampu extends Model
{
    protected $table = 'tbl_data_surat_tidakmampu';
    protected $fillable = [
        'warga_id','nama','nik','tempat_lahir','tanggal_lahir','kelamin','agama','kewarganegaraan','pekerjaan','alamat',
        'jenis_surat','file_surat','nama_a','kelamin_a','sekolah_a','tempat_lahir_a','tanggal_lahir_a','alasan','wa'
    ];
}
