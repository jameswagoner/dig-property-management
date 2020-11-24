<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
            ->assertSeeLivewire('tasks.show');
    }

    public function test_create_task()
    {
        $title = $this->faker->sentence;

        Livewire::test('tasks.new-task')
            ->set('title', $title)
            ->set('description', $this->faker->paragraph)
            ->set('unit', $this->faker->buildingNumber)
            ->set('priority', 'normal')
            ->call('createTask');

        $this->assertTrue(Task::where('title', $title)->exists());
    }
}
