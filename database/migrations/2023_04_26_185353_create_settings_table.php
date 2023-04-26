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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('title')->default('My new Laravel Website');
            $table->text('description')->nullable();
            $table->string('logo')->nullable()->default('default-logo.png');
            $table->string('favicon')->nullable();
            $table->text('robots')->nullable();
            $table->longText('webmaster')->nullable()->default('<script>console.log("Hello, Webmaster");</script>');
            $table->string('separator')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
