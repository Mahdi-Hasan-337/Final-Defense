<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paid_course_id');
            $table->string('title');
            $table->text('content');
            $table->integer('module_number');
            $table->string('covered_topics')->nullable();
            $table->string('assignment_topics')->nullable();
            $table->tinyInteger('is_locked')->nullable()->default(1);
            $table->timestamps();

            $table->foreign('paid_course_id')->references('id')->on('paid_courses')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('modules');
    }
};
