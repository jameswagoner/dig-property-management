<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sid')->nullable();

            $table->string('number')->nullable();
            $table->string('type');
            $table->string('direction')->default('automation');
            $table->string('recording_url')->nullable();
            $table->text('text')->nullable();

            $table->json('payload')->nullable();

            $table->foreignId('marked_read_by')->constrained('users')->onDelete('cascade');

            $table->timestamp('marked_read_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('incoming_requests');
    }
}
