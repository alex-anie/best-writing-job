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
        Schema::create('writers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('writer_name');
            $table->string('logo');
            $table->string('bio');
            $table->string('job_type');
            $table->string('experience');
            $table->string('job_category');
            $table->string('job_role');
            $table->string('location');
            $table->string('email');
            $table->double('salary');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('writers');
    }
};
