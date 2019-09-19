<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsernamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usernames', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('username', 48);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('username_id')->nullable();
            $table->foreign('username_id')
                ->references('id')->on('usernames')
                ->onDelete('null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username_id');
        });

        Schema::dropIfExists('usernames');
    }
}
