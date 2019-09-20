<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->morphs('nameable');
            $table->string('name', 48);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('identity_id')->nullable(); // the current identity
            $table->foreign('identity_id')
                ->references('id')->on('identities')
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
            $table->dropColumn('identity_id');
        });

        Schema::dropIfExists('identities');
    }
}
