<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('gender', allowed: ['laki-laki', 'perempuan']);
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('school_origin');
            $table->enum('unit', allowed: ['DKV', 'RPL', 'TKJ']);
            $table->enum('registration_type', allowed: ['baru', 'pindahan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
