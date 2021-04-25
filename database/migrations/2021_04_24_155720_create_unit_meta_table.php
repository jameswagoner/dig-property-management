<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitMetaTable extends Migration
{
    public function up()
    {
        Schema::create('unit_meta', function (Blueprint $table) {
            $table->id();

            $table->integer('unit_id')->unsigned()->index();
            $table->foreign('unit_id')->references('id')->on('unit')->onDelete('cascade');

            $table->string('type')->default('null');

            $table->string('key')->index();
            $table->text('value')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('unit_meta');
    }
}
