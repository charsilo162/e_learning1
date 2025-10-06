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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            // Relationship Link
            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->onDelete('restrict'); // Prevent deleting category if courses exist


  $table->foreignId('uploader_user_id')
          ->nullable()
          ->constrained('users') // Constrains to the 'users' table
          ->onDelete('set null');

    // 2. Tracks the ASSIGNED PRIMARY TUTOR (the instructor)
    $table->foreignId('assigned_tutor_id')
          ->nullable()
          ->constrained('tutors') // Constrains to the 'tutors' table
          ->onDelete('set null');


            // Core Course Details
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image_thumbnail_url')->nullable();
            
            // Course Type (Online, Physical, Hybrid)
            $table->enum('type', ['online', 'physical', 'hybrid'])->default('online');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};