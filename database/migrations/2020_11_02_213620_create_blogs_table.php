<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('slug');
            $table->string('image');
            $table->string('category');
            $table->text('content');
            $table->text('continue_1')->nullable();
            $table->string('continue_image_1')->nullable();
            $table->text('continue_2')->nullable();
            $table->string('continue_image_2')->nullable();
            $table->text('quote')->nullable();
            $table->integer('view')->default(0);
            $table->string('quote_by')->nullable();
            $table->string('status');
            $table->foreignId('user_id')->constrained('users');
//            $table->string('user_role'); later
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
        Schema::dropIfExists('blogs');
    }
}
