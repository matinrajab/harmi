<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomepageRequest;
use App\Models\Homepage;
use App\Models\Mission;

class AdminHomepageController extends Controller
{

    public function show()
    {
        $home = Homepage::first();
        $missions = Mission::all();
        return view('admin.home.index', ['home' => $home, 'missions' => $missions]);
    }

    public function edit()
    {
        $home = Homepage::first();
        $missions = Mission::all();
        return view('admin.home.edit-homepage', ['home' => $home, 'missions' => $missions]);
    }

    public function update(HomepageRequest $request)
    {
        $home = Homepage::first();
        $home->update($request->all());

        return redirect('/admin/homepage');
    }
}
