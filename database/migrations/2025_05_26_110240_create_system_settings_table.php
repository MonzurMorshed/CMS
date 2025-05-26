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
        Schema::create('system_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo_file',255);
            $table->string('favicon_file',255);
            $table->string('footer_file',255);
            $table->string('social_link_facebook');
            $table->string('social_link_twitter');
            $table->string('social_link_google');
            $table->string('social_link_pinterest');
            $table->text('footer_text','');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_settings');
    }
};
