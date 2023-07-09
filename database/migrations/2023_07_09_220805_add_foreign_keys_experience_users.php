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
        Schema::table('experience_users', function (Blueprint $table) {
            $table->foreign('detail_users_id', 'fk_experice_users_to_detail_users')->references('id')->on('detail_users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('experience_users', function (Blueprint $table) {
            $table->dropForeign('fk_experice_users_to_detail_users');
        });
    }
};
