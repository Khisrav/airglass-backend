<?php

namespace App\Http\Controllers;

use App\Models\TemplateGroup;
use Illuminate\Http\Request;

class TemplateGroupController extends Controller
{
    public function index()
    {
        $templateGroups = TemplateGroup::all();
        return response()->json($templateGroups);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $templateGroup = TemplateGroup::create($request->all());
        return response()->json($templateGroup, 201);
    }

    public function show(TemplateGroup $templateGroup)
    {
        return response()->json($templateGroup);
    }

    public function update(Request $request, TemplateGroup $templateGroup)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $templateGroup->update($request->all());
        return response()->json($templateGroup);
    }

    public function destroy(TemplateGroup $templateGroup)
    {
        $templateGroup->delete();
        return response()->json(null, 204);
    }
}
