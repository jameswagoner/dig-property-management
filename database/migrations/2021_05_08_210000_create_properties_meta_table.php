<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesMetaTable extends Migration
{
    public function up()
    {
        Schema::create('property_meta', function (Blueprint $table) {
            $table->id();
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');

            $table->string('type')->default('null');

            $table->string('key')->index();
            $table->text('value')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_meta');
    }
}
