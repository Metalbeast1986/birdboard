<?php

namespace Tests\Feature;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTaskTest extends TestCase
{
    use RefreshDatabase;
   
    public function test_a_project_can_have_tasks()
    {
        //$this->actingAs(factory('App\User')->create());
        $this->signIn();

        $project = factory(Project::class)->create(['owner_id' => auth()->id()]);

        $this->post($project->path() . '/tasks', ['body'=>'Test task']);

        $this->get($project->path())
            ->assertSee('Test task');
    }
}
