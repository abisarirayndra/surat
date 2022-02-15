<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleIdToTblUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_users', function (Blueprint $table) {
            $table->integer('role_id')->unsigned()->nullable()->after('password');
            $table->foreign('role_id')
                    ->references('id')
                    ->on('tbl_roles')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_users', function (Blueprint $table) {
            //
        });
    }
}
