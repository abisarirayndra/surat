<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDataSuratUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_surat_usaha', function (Blueprint $table) {
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
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('jenis_surat');
            $table->string('usaha');    
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
        Schema::dropIfExists('tbl_data_surat_usaha');
    }
}
