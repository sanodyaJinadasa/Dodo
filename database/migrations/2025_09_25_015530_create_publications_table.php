<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // "Journal Publication" or "Abstracts & Symposium Proceedings"
            $table->string('authors'); // full authors
            $table->string('year');
            $table->text('title'); // publication title
            $table->string('journal')->nullable(); // journal name
            $table->string('volume_issue')->nullable(); // e.g. 105, 140-157
            $table->string('doi_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
