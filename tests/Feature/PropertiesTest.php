<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PropertiesTest extends TestCase
{
    use RefreshDatabase;

    public $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
    }

    public function test_page_has_livewire_component()
    {
        $this->withoutExceptionHandling();

        $this->actingAs($this->user)
            ->get('/properties')
            ->assertSeeLivewire('properties.list-properties')
            ->assertSeeLivewire('properties.new-property');
    }
}
