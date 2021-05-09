<?php

use App\Models\Unit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsMetaTable extends Migration
{
    public function up()
    {
        Schema::create('units_meta', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Unit::class, 'unit_id');

            $table->string('type')->default('null');

            $table->string('key')->index();
            $table->text('value')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('units_meta');
    }
}
