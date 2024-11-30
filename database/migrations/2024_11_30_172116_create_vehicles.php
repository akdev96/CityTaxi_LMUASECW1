<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_id')->unique(); // number_plate
            $table->integer('driver_id'); // driver id
            $table->string('vehicle_type'); // ThreeWheel Car, Van
            $table->string('body_type'); // Sedan, Hatch back
            $table->string('year_of_manufacture');
            $table->string('color');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
