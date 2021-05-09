<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDelete('cascade');

            $table->string('title')->index();
            $table->text('description');
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
