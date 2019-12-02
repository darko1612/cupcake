<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('page_title', 65);
            $table->string('template', 65);
            $table->integer('position');
            $table->string('pre_title')->nullable($value = true);
            $table->string('pre_title_color')->nullable($value = true);
            $table->string('pre_title_font')->nullable($value = true);
            $table->integer('pre_title_size')->nullable($value = true);
            $table->string('title')->nullable($value = true);
            $table->string('title_color')->nullable($value = true);
            $table->string('title_font')->nullable($value = true);
            $table->integer('title_size')->nullable($value = true);
            $table->string('background')->nullable($value = true);
            $table->string('nav_bar_color')->nullable($value = true);
            $table->string('link_color')->nullable($value = true);
            $table->string('link_font')->nullable($value = true);
            $table->integer('link_size')->nullable($value = true);
            $table->string('image')->nullable($value = true);
            $table->string('section1_color')->nullable($value = true);
            $table->string('section1_pre_title')->nullable($value = true);
            $table->string('section1_pre_title_color')->nullable($value = true);
            $table->string('section1_pre_title_font')->nullable($value = true);
            $table->integer('section1_pre_title_size')->nullable($value = true);
            $table->string('section1_title')->nullable($value = true);
            $table->string('section1_title_color')->nullable($value = true);
            $table->string('section1_title_font')->nullable($value = true);
            $table->integer('section1_title_size')->nullable($value = true);
            $table->string('section1_text')->nullable($value = true);
            $table->string('section1_text_color')->nullable($value = true);
            $table->string('section1_text_font')->nullable($value = true);
            $table->integer('section1_text_size')->nullable($value = true);
            $table->string('section2_pre_title')->nullable($value = true);
            $table->string('section2_pre_title_color')->nullable($value = true);
            $table->string('section2_pre_title_font')->nullable($value = true);
            $table->integer('section2_pre_title_size')->nullable($value = true);
            $table->string('section2_title')->nullable($value = true);
            $table->string('section2_title_color')->nullable($value = true);
            $table->string('section2_title_font')->nullable($value = true);
            $table->integer('section2_title_size')->nullable($value = true);
            $table->string('section2_text')->nullable($value = true);
            $table->string('section2_text_color')->nullable($value = true);
            $table->string('section2_text_font')->nullable($value = true);
            $table->integer('section2_text_size')->nullable($value = true);
            $table->string('section2_color_1')->nullable($value = true);
            $table->string('section2_color_2')->nullable($value = true);

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
        Schema::dropIfExists('pages');
    }
}
