<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->index();
            $table->string('category')->index();
            $table->string('description')->index();
            $table->string('location')->index();
            $table->string('status')->index();
            $table->string('image')->index();
            $table->string('size')->index();
            $table->string('bed')->index();
            $table->string('bath')->index();
            $table->string('parking')->index();
            $table->string('address')->index();
            $table->string('town')->index();
            $table->string('price')->index();
            $table->timestamp('created_at');
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
    }
}
