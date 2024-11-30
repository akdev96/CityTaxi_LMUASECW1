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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('role')->default('Driver');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nic_no')->unique();
            $table->string('mobile_number');
            $table->string('license_no')->unique();
            $table->string('vehicle_no');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_pic')->nullable();
            $table->date('birth_day');
            $table->text('address');
            $table->text('city');
            $table->text('zip_code');
            $table->text('district');
            $table->text('gender');
            $table->rememberToken();
            $table->timestamps();

            // Define the foreign key constraint
            // $table->foreign('vehicle_id')
            //     ->references('id')
            //     ->on('vehicles')
            //     ->onDelete('cascade'); // Optional: cascades delete action
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
        // Schema::table('drivers', function (Blueprint $table) {
        //     $table->dropForeign(['vehicle_no']);
        //     $table->dropColumn('vehicle_no');
        // });
    }
};
