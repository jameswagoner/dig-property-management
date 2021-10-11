<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->foreignIdFor(User::class, 'user_id')->after('id');
            $table->renameColumn('text', 'body');
        });
    }

    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            //
        });
    }
};
