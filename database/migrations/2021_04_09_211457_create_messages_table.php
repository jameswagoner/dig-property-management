<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('call_sid');

            $table->string('number')->nullable();
            $table->string('type');
            $table->string('direction')->default('automation');
            $table->string('recording_url')->nullable();
            $table->text('text')->nullable();

            $table->json('payload')->nullable();

            $table->foreign('marked_read_by')->references('id')->on('users')->onDelete('cascade');

            $table->timestamp('marked_read_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('incoming_requests');
    }
}
