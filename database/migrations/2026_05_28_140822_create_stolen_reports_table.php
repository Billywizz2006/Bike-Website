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
        Schema::create('stolen_reports', function (Blueprint $table) {
            $table->id();

            $table->foreignId('bicycle_id')->constrained()->onDelete('cascade');

            $table->date('date_stolen');
            $table->text('location_stolen');
            $table->text('description')->nullable();

            $table->string('status')->default('Reported');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stolen_reports');
    }
};
