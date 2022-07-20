<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('ico')->nullable();
            $table->string('banner_txt_1')->nullable();
            $table->string('banner_img_1')->nullable();
            $table->string('video_poster')->nullable();
            $table->string('video_file')->nullable();
            $table->string('banner_txt_2')->nullable();
            $table->string('banner_img_2')->nullable();
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
        Schema::dropIfExists('options');
    }
}
