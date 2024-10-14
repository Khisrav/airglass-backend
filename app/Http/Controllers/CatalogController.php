<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::all();
        return response()->json($catalogs);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string',
            'purchase_price' => 'required|integer',
            'retail_price' => 'required|integer',
            'unit' => 'nullable|string',
            'vendor_code' => 'nullable|string',
            'catalog_group_id' => 'required|exists:catalog_groups,id',
        ]);

        $catalog = Catalog::create($request->all());
        return response()->json($catalog, 201);
    }

    public function show(Catalog $catalog)
    {
        return response()->json($catalog);
    }

    public function update(Request $request, Catalog $catalog)
    {
        $request->validate([
            'name' => 'nullable|string',
            'purchase_price' => 'required|integer',
            'retail_price' => 'required|integer',
            'unit' => 'nullable|string',
            'vendor_code' => 'nullable|string',
            'catalog_group_id' => 'required|exists:catalog_groups,id',
        ]);

        $catalog->update($request->all());
        return response()->json($catalog);
    }

    public function destroy(Catalog $catalog)
    {
        $catalog->delete();
        return response()->json(null, 204);
    }
}
