<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceptRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accept_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('notes');
            $table->string('recommendation')->nullable();
            $table->integer('rating')->nullable();
            $table->bigInteger('request_id')->unsigned();
            $table->foreign('request_id')->references('id')->on('request_specialists')->onDelete('cascade');
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
        Schema::dropIfExists('accept_requests');
    }
}
