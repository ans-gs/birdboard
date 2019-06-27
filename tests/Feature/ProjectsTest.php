<?php

namespace Tests\Feature;

use tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function a_user_can_create_a_project() {
        $this->withoutExceptionHandling();

        //Given
        $attributes = [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph
        ];

        //When
        $this->post('/projects', $attributes);
        
        //Then
        $this->assertDatabaseHas('projects', $attributes);
    }
}

//Restart this project. Copy info from this class, web, Project, migration, .env if you want to into new proj.