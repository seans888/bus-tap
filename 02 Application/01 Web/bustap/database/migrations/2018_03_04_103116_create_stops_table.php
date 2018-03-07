<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stop_code', 5)->unique();
            $table->string('stop_name', 50);
            $table->string('stop_location', 50);
            $table->char('stop_loadbeep', 1);
            $table->char('stop_sellticket', 1);
            $table->integer('route_code')->unsigned();
            $table->foreign('route_code')->references('id')->on('routes');
            $table->integer('stop_order');
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
        Schema::dropIfExists('stops');
    }
}