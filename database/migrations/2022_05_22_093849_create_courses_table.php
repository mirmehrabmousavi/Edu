<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('desc');
            $table->text('b_desc');
            $table->string('price');
            $table->string('price_off')->nullable();;
            $table->string('seo_title')->nullable();;
            $table->string('seo_desc')->nullable();;
            $table->text('c_poster')->nullable();;
            $table->text('c_file')->nullable();;
            $table->text('c_demo')->nullable();;
            $table->text('c_alt_img')->nullable();;
            $table->text('c_slider_img')->nullable();;
            $table->string('time');
            $table->string('status');
            $table->string('status_upload');
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
        Schema::dropIfExists('courses');
    }
}
