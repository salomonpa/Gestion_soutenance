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
        Schema::create('juries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
           
            $table->unsignedBigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('enseignants_id')->unsigned();
            $table->foreign('enseignants_id')->references('id')->on('enseignants')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('directeurmemoires_id')->unsigned();
            $table->foreign('directeurmemoires_id')->references('id')->on('directeurmemoires')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('maitrestages_id')->unsigned();
            $table->foreign('maitrestages_id')->references('id')->on('maitrestages')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('presidentjs_id')->unsigned();
            $table->foreign('presidentjs_id')->references('id')->on('presidentjs')->onDelete('cascade')->onUpdate('cascade');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juries');
    }
};
