<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('firstname');
            $table->string('lastname');
//            $table->string('email'); An initial stupid idea
            $table->string('phone');
            $table->string('date_of_birth');
            $table->string('address');
            $table->string('address_2')->nullable()->default('Not Available');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode')->nullable();
            $table->string('country');
            $table->string('gender')->nullable();
            $table->text('about');
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
        Schema::dropIfExists('user_details');
    }
}
