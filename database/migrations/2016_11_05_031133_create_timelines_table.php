<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Timelines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('content_id');
            $table->string('title');
            $table->text('message');
            $table->string('picture1');
            $table->string('picture2');
            $table->string('picture3');
            $table->string('picture4');
            $table->string('picture5');
            $table->string('video');
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
        //
        Schema::drop('Timelines');
    }
}
