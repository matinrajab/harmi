<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValueRequest;
use App\Models\Value;
use Illuminate\Http\Request;

class AdminValueController extends Controller
{
    public function create()
    {
        return view('admin.home.add-value');
    }

    public function store(ValueRequest $request)
    {
        Value::create($request->all());

        return redirect('/admin/homepage/edit');
    }

    public function edit(string $id)
    {
        $value = Value::findOrFail($id);

        return view('admin.home.edit-value', ['value' => $value]);
    }

    public function update(ValueRequest $request, string $id)
    {
        $value = Value::findOrFail($id);
        $value->update($request->all());

        return redirect('/admin/homepage/edit');
    }

    public function destroy(string $id)
    {
        $value = Value::findOrFail($id);
        $value->delete();

        return redirect()->back();
    }
}
