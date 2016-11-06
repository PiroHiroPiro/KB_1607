<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contents', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('title');
        $table->text('description');
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
        Schema::drop('Content');
    }
}
