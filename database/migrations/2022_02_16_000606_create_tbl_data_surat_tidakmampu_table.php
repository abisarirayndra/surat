<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDataSuratTidakmampuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_surat_tidakmampu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('warga_id')->unsigned()->nullable();
            $table->foreign('warga_id')
                    ->references('id')
                    ->on('tbl_users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('nama');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('kelamin');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('jenis_surat');
            $table->string('nama_a');
            $table->string('kelamin_a');
            $table->string('sekolah_a');
            $table->string('tempat_lahir_a');
            $table->string('tanggal_lahir_a');
            $table->string('file_surat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_data_surat_tidakmampu');
    }
}
