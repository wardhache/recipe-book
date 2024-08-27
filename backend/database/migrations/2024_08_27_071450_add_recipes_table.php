<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('unique_identifier', 36);
            $table->string('name');
            $table->text('ingredients');
            $table->text('instructions');
            $table->string('cuisine_type');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }
};
