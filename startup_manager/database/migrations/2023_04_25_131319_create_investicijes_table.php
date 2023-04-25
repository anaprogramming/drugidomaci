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
        Schema::create('investicijes', function (Blueprint $table) {
            $table->id();
            $table->integer('iznos');
            $table->string('kredit');
            $table->foreignId('investitor_id')->constrained('investitors');
            $table->foreignId('startup_id')->constrained('startups');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investicijes');
    }
};
