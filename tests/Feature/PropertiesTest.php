<?php

namespace Tests\Feature;

use App\Models\Property;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class PropertiesTest extends TestCase
{
    use RefreshDatabase;

    public $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->withoutExceptionHandling();

        $this->user = User::factory()->create();
    }

    public function test_page_has_livewire_component()
    {
        $this->actingAs($this->user)
            ->get('/properties')
            ->assertSeeLivewire('properties.list-properties')
            ->assertSeeLivewire('properties.new-property');
    }

    public function test_create_property()
    {
        $property = Property::factory()->make();

        Livewire::test('properties.new-property')
            ->set('nickname', $property->nickname)
            ->call('createProperty');

        $this->assertDatabaseHas('properties', ['nickname' => $property->nickname]);
    }
}
