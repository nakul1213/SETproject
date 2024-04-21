<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('cca_ecas', function (Blueprint $table) {
            $table->id();

            $table->string('college_email');

            $table->string('cca_sports');
            $table->string('eca_sports');
            $table->string('major_game');
            $table->string('minor_game');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('cca_ecas');
    }
};
