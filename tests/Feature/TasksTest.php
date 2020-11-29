<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Livewire\Livewire;
use Tests\TestCase;

class TasksTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
    }

    public function test_page_has_livewire_component()
    {
        $this->actingAs($this->user)->get('/tasks')
            ->assertSeeLivewire('tasks.new-task')
            ->assertSeeLivewire('tasks.list-tasks');
    }

    public function test_create_task()
    {
        $task = Task::factory()->make();

        Livewire::test('tasks.new-task')
            ->set('title', $task->title)
            ->set('property_id', $task->property_id)
            ->set('description', $task->description)
            ->set('priority', Str::lower($task->priority))
            ->call('createTask');

        $this->assertDatabaseHas('tasks', ['title' => $task->title]);
    }
}
