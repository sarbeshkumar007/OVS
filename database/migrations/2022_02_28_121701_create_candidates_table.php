<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('F_name')->nullable();
            $table->string('L_name')->nullable();
            $table->string('citizenship_no')->nullable();
            $table->string('age')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('qualification')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->text('upload_photo')->nullable();
            $table->string('party_name')->nullable();
            $table->string('election_symbol')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
