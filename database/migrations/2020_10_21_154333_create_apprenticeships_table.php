<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenticeshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenticeships', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('details');
            $table->string('company');
            $table->string('start_month');
            $table->string('start_year');
            $table->string('end_month');
            $table->string('end_year');
            $table->string('apprentice_period');
            $table->string('mentor_period');
            $table->string('apprentice_service'); // service to be rendered
            $table->string('mentor_name');
            $table->string('status')->nullable()->default('Active'); //Active, Suspended.
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('apprenticeships');
    }
}
