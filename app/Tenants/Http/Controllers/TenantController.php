<?php

namespace App\Tenants\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;

class TenantController extends Controller
{
    public function index(): View
    {
        $tenants = User::type('tenant')->paginate();

        return view('manage.tenants.index')
            ->with('tenants', $tenants);
    }

    public function create(): View
    {
        return view('manage.tenants.form')
            ->with('tenant', User::make());
    }

    public function show(User $tenant): View
    {
        return view('manage.tenants.profile')
            ->with('tenant', $tenant);
    }

    public function edit(User $tenant): View
    {
        return view('manage.tenants.form')
            ->with('tenant', $tenant);
    }
}
