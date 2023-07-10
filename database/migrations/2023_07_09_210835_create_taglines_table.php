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
        Schema::create('taglines', function (Blueprint $table) {
            $table->id();
            // $table->integer('service_id');
            $table->foreignId('services_id')->nullable()->index('fk_taglines_to_services');
            $table->string('tagline')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taglines');
    }
};
