<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDataSuratKtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_surat_ktp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('surat_id')->unsigned()->nullable();
            $table->foreign('surat_id')
                    ->references('id')
                    ->on('tbl_surat')
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
        Schema::dropIfExists('tbl_data_surat_ktp');
    }
}
