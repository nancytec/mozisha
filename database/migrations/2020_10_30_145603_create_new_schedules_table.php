<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('topic');
            $table->text('details'); //Max 600 chars
            $table->string('date'); //meeting date
            $table->string('start_time'); //Starting date
            $table->string('platform'); //Either zoom or google meet
            $table->text('link');
            $table->string('meeting_id')->nullable();
            $table->string('passcode')->nullable();
            $table->string('status')->default('Active');// Cancelled, Active, Done
            $table->foreignId('mentor_id')->constrained('users');
            $table->foreignId('mentee_id')->constrained('users');
            $table->foreignId('connect_id')->constrained('connects');
            $table->foreignId('initiator_id')->constrained('users'); //Who initiates the meeting.
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
        Schema::dropIfExists('new_schedules');
    }
}
