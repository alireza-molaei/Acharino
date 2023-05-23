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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('slug',128)->unique();
            $table->string('title');
            $table->text('description');
            $table->text('url');
            $table->string('back_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('url');
            $table->dropColumn('back-image');
        });
    }
};
