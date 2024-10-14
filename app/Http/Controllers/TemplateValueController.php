<?php

namespace App\Http\Controllers;

use App\Models\TemplateValue;
use Illuminate\Http\Request;

class TemplateValueController extends Controller
{
    public function index()
    {
        $templateValues = TemplateValue::all();
        return response()->json($templateValues);
    }

    public function store(Request $request)
    {
        $request->validate([
            'template_id' => 'required|exists:templates,id',
            'catalog_item_id' => 'required|exists:catalog,id',
            'quantity' => 'required|integer',
        ]);

        $templateValue = TemplateValue::create($request->all());
        return response()->json($templateValue, 201);
    }

    public function show(TemplateValue $templateValue)
    {
        return response()->json($templateValue);
    }

    public function update(Request $request, TemplateValue $templateValue)
    {
        $request->validate([
            'template_id' => 'required|exists:templates,id',
            'catalog_item_id' => 'required|exists:catalog,id',
            'quantity' => 'required|integer',
        ]);

        $templateValue->update($request->all());
        return response()->json($templateValue);
    }

    public function destroy(TemplateValue $templateValue)
    {
        $templateValue->delete();
        return response()->json(null, 204);
    }
}
