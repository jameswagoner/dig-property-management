<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListUsers extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.users.list', [
            'users' => User::paginate()
        ]);
    }
}
