<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title');
            $table->text('description');
            $table->string('unit');
            $table->enum('priority', ['low', 'normal', 'high', 'emergency'])->default('normal');
            $table->enum('status', ['new', 'in-progress', 'completed'])->default('new');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}