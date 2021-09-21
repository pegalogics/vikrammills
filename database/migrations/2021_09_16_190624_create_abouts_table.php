<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->longText('about_banner')->nullable();
            $table->longText('about_content')->nullable();
            $table->string('about_pic')->nullable();
            $table->longText('our_history_content')->nullable();
            $table->string('our_history_pic')->nullable();
            $table->longText('brand_content')->nullable();
            $table->string('brand_pic')->nullable();
            $table->longText('why_choose_us_content')->nullable();
            $table->longText('pic_after_why_choose_us_content')->nullable();
            $table->longText('our_vision_content')->nullable();
            $table->string('our_vision_background')->nullable();
            $table->longText('our_mission')->nullable();
            $table->string('our_mission_background')->nullable();
            $table->longText('our_management_content')->nullable();
            $table->string('our_management_pic')->nullable();
            $table->integer('gallery_id')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
