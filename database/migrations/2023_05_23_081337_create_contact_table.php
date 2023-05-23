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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('email');
            $table->string('phone-number');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('family');
            $table->dropColumn('email');
            $table->dropColumn('phone-number');
            $table->dropColumn('message');

        });
    }
};

