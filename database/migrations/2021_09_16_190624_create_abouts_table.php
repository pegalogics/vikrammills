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
            $table->string('head_pic');
            $table->string('about_us_content');
            $table->string('about_us_pic');
            $table->string('out_history_content');
            $table->string('our_history_pic');
            $table->string('brand_content');
            $table->string('brand_pic');
            $table->string('why_choose_us_content');
            $table->string('pic_after_why_choose_us_content');
            $table->string('our_vision_content');
            $table->string('our_vision_background');
            $table->string('our_mission');
            $table->string('our_mission_background');
            $table->string('our_management_content');
            $table->string('our_management_pic');
            $table->integer('gallery_id');
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
