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
        Schema::create('core_managements', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("photo");
            $table->enum("position", ["Ketua", "Wakil", "Sekretaris Jenderal", "Bendahara 1", "Bendahara 2"])->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('core_managements');
    }
};
