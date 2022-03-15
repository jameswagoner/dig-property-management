<?php

use App\Models\User;
use App\Units\Models\Unit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignIdFor(Unit::class, 'unit_id')->nullable();
            $table->foreignIdFor(User::class, 'user_id')->nullable();

            $table->string('type');
            $table->string('category');
            $table->string('business_name')->nullable();
            $table->integer('amount');

            $table->date('transacted_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses');
    }
};
