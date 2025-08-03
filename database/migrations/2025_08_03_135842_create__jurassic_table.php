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
        Schema::create('Jurassic', function (Blueprint $table) {
            $table->id();;
            $table->integer('movies')->nullable();
            $table->float('years')->nullable();
            $table->string('director')->nullable();
            $table->date('date')->nullable();
            $table->text('name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Jurassic');
    }
};
