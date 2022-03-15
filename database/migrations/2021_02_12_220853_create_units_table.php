<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id')->nullable()->constrained()->onDelete('set null');

            $table->string('name');
            $table->string('address');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('units');
    }
};
