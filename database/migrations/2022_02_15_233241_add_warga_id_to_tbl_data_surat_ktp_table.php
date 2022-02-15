<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWargaIdToTblDataSuratKtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_data_surat_ktp', function (Blueprint $table) {
            $table->integer('warga_id')->unsigned()->nullable()->after('id');
            $table->foreign('warga_id')
                    ->references('id')
                    ->on('tbl_users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('jenis_surat')->after('alamat');
            $table->string('file_surat')->nullable()->after('jenis_surat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_data_surat_ktp', function (Blueprint $table) {
            //
        });
    }
}
