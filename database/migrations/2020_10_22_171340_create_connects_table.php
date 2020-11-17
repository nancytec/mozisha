<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mentor_id')->constrained('users');
            $table->foreignId('mentee_id')->constrained('users');
            $table->string('apprenticeship_id')->constrained('apprenticeships');
            $table->string('initial_start_month'); //The date the montor uploaded in the apprenticeship tale
            $table->string('initial_start_year');
            $table->string('initial_end_month');
            $table->string('initial_end_year');
            $table->string('apprentice_period');
            $table->string('mentor_period');
            $table->string('apprentice_service')->nullable(); // service to be rendered
            $table->string('status')->default('Active'); //Active, completed, suspended or terminated.
            $table->string('rating')->nullable(); // Excellent(5), good(4), fair(3), bad(2), or poor(1).
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
        Schema::dropIfExists('connects');
    }
}
