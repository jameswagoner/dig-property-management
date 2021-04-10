<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('incoming_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('call_sid');

            $table->string('number')->nullable();
            $table->string('recording_url')->nullable();
            $table->text('text')->nullable();

            $table->json('payload');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('incoming_requests');
    }
}
