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
        Schema::create('apotekers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('stra_no');
            $table->string('category');
            $table->string('alumni');
            $table->string('experience');
            $table->string('practice')->nullable();
            $table->decimal('price', 20, 2)->default(20000);
            $table->string('image');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apotekers');
    }
};
