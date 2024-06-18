<?php
// app/Http/Controllers/FirstPageController.php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $materials = Material::with('type')->get();
        $menus = Menu::all();

        // Group materials by their type
        $groupedMaterials = $materials->groupBy(function ($material) {
            return $material->type->name;
        });

        return response()->json([
            'materials' => $groupedMaterials,
            'menus' => $menus,
        ]);
    }
    public function filterByMaterial(Request $request)
    {
        // Validate the request
        $request->validate([
            'materials' => 'required|array', // Assuming materials will be passed as an array
        ]);

        // Retrieve menus that have all the specified materials
        $menus = Menu::whereJsonContains('material', $request->materials)->get();

        return response()->json(['menus' => $menus]);
    }
}
