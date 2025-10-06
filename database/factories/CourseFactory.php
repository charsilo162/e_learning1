<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Category;
use App\Models\User;
use App\Models\Tutor; // Import the Tutor model
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        // Ensure a Tutor exists, and get their ID
        $tutor = Tutor::inRandomOrder()->first() ?? Tutor::factory()->create();
        
        // Use the Tutor's linked user_id for the uploader field
        $uploaderUserId = $tutor->user_id;

        return [
            // Ensure a Category exists for the course
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(), 
            
            'title' => $this->faker->sentence(4) . ' Masterclass',
            'description' => $this->faker->paragraph(5),
            'image_thumbnail_url' => $this->faker->imageUrl(800, 600, 'course', true),
            'type' => $this->faker->randomElement(['online', 'physical', 'hybrid']),
            
            // --- NEW FIELDS ---
            // Set the Uploader to the Tutor's linked User
            'uploader_user_id' => $uploaderUserId,
            
            // Set the Assigned Tutor to the random/created Tutor's ID
            'assigned_tutor_id' => $tutor->id,
            // ------------------
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Course $course) {
            // Attach random users as registered students
            $userIds = User::pluck('id');

            if ($userIds->isNotEmpty()) {
                // Ensure at least 5 users are attached, up to a max of 30
                $count = min(30, $userIds->count());
                $registeredUserIds = $userIds->random(rand(5, $count));
                $course->users()->attach($registeredUserIds);
            }
        });
    }
}