<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;

class TenantController extends Controller
{
    public function index()
    {
        //
    }

    public function show()
    {
        return view('manage.tenants.profile');
    }
}
