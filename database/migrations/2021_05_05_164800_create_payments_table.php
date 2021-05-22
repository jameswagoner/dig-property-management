<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('source')->nullable();
            $table->string('source_id')->nullable();
            $table->string('status')->nullable();

            $table->integer('amount')->unsigned();
            $table->integer('fee')->unsigned()->nullable();
            $table->string('description')->nullable();

            $table->json('raw')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
