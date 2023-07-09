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
        Schema::create('experience_users', function (Blueprint $table) {
            $table->id();
            // $table->integer('detail_user')->nullable();
            $table->foreignId('detail_users_id')->nullable()->index('fk_experice_users_to_detail_users');
            $table->string('experience');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_users');
    }
};
