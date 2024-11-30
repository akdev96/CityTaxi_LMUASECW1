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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('passenger_id');
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('vehicle_id');

            $table->decimal('from_lat', 10, 7)->nullable();
            $table->decimal('from_lng', 10, 7)->nullable();
            $table->decimal('to_lat', 10, 7)->nullable();
            $table->decimal('to_lng', 10, 7)->nullable();
            $table->string('from_location');
            $table->string('to_location');
            $table->string('trip_status');
            $table->decimal('trip_fare', 10, 2)->nullable();
            $table->integer('trip_duration'); //in seconds
            $table->string('trip_distance', 8, 2)->nullable();
            $table->string('start_time');
            $table->string('end_time');
            $table->text('cancel_reason')->nullable();
            $table->text('feedback')->nullable();
            $table->timestamps();

            // Add foreign key constraints
            // $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade');
            // $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
            // $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
