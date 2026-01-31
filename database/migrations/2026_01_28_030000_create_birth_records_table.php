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
        Schema::create('birth_records', function (Blueprint $table) {
            $table->id();
            $table->string('baby_name');
            $table->date('birth_date');
            $table->time('birth_time');
            $table->string('birth_place');
            $table->enum('gender', ['L', 'P']);
            $table->string('mother_name');
            $table->string('mother_nik');
            $table->string('father_name');
            $table->string('father_nik');
            $table->string('mother_address')->nullable();
            $table->string('father_address')->nullable();
            $table->string('baby_weight')->nullable();
            $table->string('baby_length')->nullable();
            $table->string('birth_certificate_number')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('birth_records');
    }
};
