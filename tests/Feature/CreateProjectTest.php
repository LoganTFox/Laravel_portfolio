<?php

namespace Tests\Feature;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateProjectTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function an_unauthorized_user_cannot_create_a_project()
    {
        $this->withExceptionHandling();

        $this->get('/projects/create')
            ->assertRedirect('/login');

        $this->post('/projects/create')
            ->assertRedirect('/login');
    }

    /** @test */
    function an_authorized_user_can_create_a_project()
    {
        $this->withoutExceptionHandling();
        $user = create('App\User');
        $this->be($user);

        $project = make('App\Project');

        $response = $this->post('/projects/create', $project->toArray());

        $this->assertDatabaseHas('projects', [
            'user_id' => $user->id,
            'title' => $project->title,
            'link' => $project->link,
            'github' => $project->github
        ]);

        $createdProject = Project::where('title', $project->title)->first();

        $this->get(route('projects.show', ['id' => $createdProject->id]))
            ->assertSee($createdProject->title);
    }

    /** @test */
    public function a_project_requires_a_title()
    {
        $this->publishProject(['title' => null])
            ->assertSessionHasErrors('title');
    }

    /** @test */
    public function a_project_requires_a_link()
    {
        $this->publishProject(['link' => null])
            ->assertSessionHasErrors('link');
    }

    /** @test */
    public function a_project_requires_a_github_link()
    {
        $this->publishProject(['github' => null])
            ->assertSessionHasErrors('github');
    }

    public function publishProject($overrides = [])
    {
        $this->withExceptionHandling()->signIn();

        $project = make('App\Project', $overrides);

        return $this->post('/projects/create', $project->toArray());
    }
}
