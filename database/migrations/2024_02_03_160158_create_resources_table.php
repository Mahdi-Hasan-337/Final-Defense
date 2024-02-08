<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->integer('course_resource_number')->nullable;
            $table->integer('resource_number');
            $table->unsignedBigInteger('paid_course_id');
            $table->string('file')->nullable();
            $table->string('url')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('module_id');
            $table->integer('module_number');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('paid_course_id')->references('id')->on('paid_courses')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('resources');
    }
};
