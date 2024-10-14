<?php

namespace App\Http\Controllers;

use App\Models\CatalogGroup;
use Illuminate\Http\Request;

class CatalogGroupController extends Controller
{
    public function index()
    {
        $catalogGroups = CatalogGroup::all();
        return response()->json($catalogGroups);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $catalogGroup = CatalogGroup::create($request->all());
        return response()->json($catalogGroup, 201);
    }

    public function show(CatalogGroup $catalogGroup)
    {
        return response()->json($catalogGroup);
    }

    public function update(Request $request, CatalogGroup $catalogGroup)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $catalogGroup->update($request->all());
        return response()->json($catalogGroup);
    }

    public function destroy(CatalogGroup $catalogGroup)
    {
        $catalogGroup->delete();
        return response()->json(null, 204);
    }
}
