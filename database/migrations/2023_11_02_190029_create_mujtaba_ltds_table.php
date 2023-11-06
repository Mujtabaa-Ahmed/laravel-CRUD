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
        Schema::create('mujtaba_ltds', function (Blueprint $table) {
            $table->id();
            $table->string('empname');
            $table->string('empmail');
            $table->string('empdess');
            $table->integer('empsalary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mujtaba_ltds');
    }
};
