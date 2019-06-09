<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use WithFaker, RefreshDatabase;
    public function test_a_user_can_create_a_project()
    {
        $this->withoutExceptionHandling();
        $attributes=[
            'title' => $this->faker->sentence,
            'description'=>$this->faker->paragraph
        ];
        $this->post('/projects', $attributes);
        $this->assertDatabaseHas('projects',  $attributes);
        $this->get('/projects')->assertSee($attributes['title']);
    }
}
