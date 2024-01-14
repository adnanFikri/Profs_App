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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('cin');
            $table->string('birth');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('sector_lp');
            $table->string('email');
            $table->string('profile');
            $table->string('sector_bac');
            $table->string('date_bac');
            $table->string('note_bac');
            $table->string('diplome_bac');
            $table->string('releve_bac');
            $table->string('university_name');
            $table->string('secteur_bac_2');
            $table->string('date_bac_2');
            $table->string('note_general');
            $table->string('diplome_bac_2');
            $table->string('releve_bac_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
