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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('code'); 
            $table->string('statut');
            $table->string('date');
            $table->string('periode');
            $table->string('motif')->nullable();
            $table->unsignedBigInteger('etudiants_id')->unsigned();
            $table->foreign('etudiants_id')->references('id')->on('etudiants')->onDelete('cascade')->onUpdate('cascade');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
