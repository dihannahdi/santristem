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
        Schema::create('partner_schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address');
            $table->string('contact_person');
            $table->string('phone');
            $table->string('email');
            $table->string('school_type')->nullable();
            $table->integer('student_count')->nullable();
            $table->integer('teacher_count')->nullable();
            $table->text('programs_interest')->nullable();
            $table->text('message')->nullable();
            $table->date('partnership_date')->nullable();
            $table->string('logo')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_schools');
    }
};
