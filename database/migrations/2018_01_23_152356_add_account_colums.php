<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAccountColums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->string('account_code')->unique();
            $table->integer('groupId')->unsigned();
            $table->tinyInteger('headerId')->default(0);
            $table->string('name');
            $table->integer('debit')->default(0);
            $table->integer('credit')->default(0);
            $table->string('normal');

            $table->foreign('groupId')->references('id')->on('account_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts', function (Blueprint $table) {
          $table->dropForeign(['groupId']);
          $table->dropColumn(['account_code','groupId','headerId','name','debit','credit','normal']);
        });
    }
}
