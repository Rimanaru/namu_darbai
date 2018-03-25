<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('orderings', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title', 250);
        $table->text('content');
        $table->integer('category_id')->unsigned();
        $table->integer('phone');
        $table->integer('user');
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
        Schema::dropIfExists('orderings');
    }
}
