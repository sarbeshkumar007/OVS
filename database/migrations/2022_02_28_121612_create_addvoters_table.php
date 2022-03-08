<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddvotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addvoters', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('F_name')->nullable();
            $table->string('L_name')->nullable();
            $table->string('citizenship_no')->unique();
            $table->string('age')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('addvoters');
    }
}
