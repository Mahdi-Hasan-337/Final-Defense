<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('designation')->nullable();
            $table->string('fb')->nullable();
            $table->string('email')->nullable();
            $table->string('github')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['member', 'supervisor', 'partner'])->default('member');
            $table->tinyInteger('visibility')->default('0')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('members');
    }
};
