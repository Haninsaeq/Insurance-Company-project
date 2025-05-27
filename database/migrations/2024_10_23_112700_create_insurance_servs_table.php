<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Insurance;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('insurance_servs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\insurance::class);
            $table->string('name');
            $table->string('company');
            $table->string('thing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_servs');
    }
};
