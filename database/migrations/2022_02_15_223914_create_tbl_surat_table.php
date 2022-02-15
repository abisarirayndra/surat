<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_surat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('warga_id')->unsigned()->nullable();
            $table->foreign('warga_id')
                    ->references('id')
                    ->on('tbl_users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('jenis_surat');
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
        Schema::dropIfExists('tbl_surat');
    }
}
