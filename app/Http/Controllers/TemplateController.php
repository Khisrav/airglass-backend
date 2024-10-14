<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Template::all();
        return response()->json($templates);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'template_group_id' => 'required|exists:template_groups,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $template = Template::create($request->all());
        return response()->json($template, 201);
    }

    public function show(Template $template)
    {
        return response()->json($template);
    }

    public function update(Request $request, Template $template)
    {
        $request->validate([
            'name' => 'required|string',
            'template_group_id' => 'required|exists:template_groups,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $template->update($request->all());
        return response()->json($template);
    }

    public function destroy(Template $template)
    {
        $template->delete();
        return response()->json(null, 204);
    }
}
