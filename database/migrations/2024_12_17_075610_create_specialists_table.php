<?php

use App\Models\Specialist;
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
        Schema::create('specialists', function (Blueprint $table) {
            $table->id();
            $table->string('specialist_name');
            $table->string('githublink');
            $table->string('pagelink');
            $table->string('membersname');
            $table->timestamps();
        });

        Specialist::create([
            'specialist_name' => 'Atlantisz Mozi',
            'githublink' => 'https://github.com/AtlantiszMozi/Szakdolgozat.git',
            'pagelink' => 'weboldal',
            'membersname' => 'Váradi Ákos, Szikora Melinda, Szabó Anett'
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialists');
    }
};
