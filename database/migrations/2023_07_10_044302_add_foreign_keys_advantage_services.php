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
        Schema::table('advantage_services', function (Blueprint $table) {
            $table->foreign('services_id', 'fk_advantage_services_to_services')->references('id')->on('services')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('advantage_services', function (Blueprint $table) {
            $table->dropForeign('fk_advantage_services_to_services');
        });
    }
};
