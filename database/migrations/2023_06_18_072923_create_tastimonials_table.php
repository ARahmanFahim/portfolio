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
        Schema::create('tastimonials', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->text('client_name');
            $table->text('testimonial_designation');
            $table->text('work_name');
            $table->text('delivery_date');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tastimonials');
    }
};
