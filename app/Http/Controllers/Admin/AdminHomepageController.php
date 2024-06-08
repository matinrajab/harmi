<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomepageRequest;
use App\Models\Homepage;
use App\Models\Mission;
use App\Services\FileService;

class AdminHomepageController extends Controller
{
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

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

        $dir = 'files/homepage/';
        $file1 = $request->file('about_us_image');

        $home->about_us_image = $this->fileService->handleFileUpdate($file1, $home->about_us_image, $dir);

        $home->update($request->except(['about_us_image']));

        return redirect('/admin/homepage');
    }
}
