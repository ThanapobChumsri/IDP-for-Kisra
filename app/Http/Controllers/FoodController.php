<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function filterByMaterial(Request $request)
    {
        // Validate the request
        $request->validate([
            'materials' => 'required|array', // Ensure materials is required and an array
        ]);

        // Get the materials array from the request
        $materials = $request->input('materials');

        // Query to find menus where all specified materials are included in at least one item in the `material` JSON array
        $menus = Menu::where(function ($query) use ($materials) {
            foreach ($materials as $material) {
                $query->whereRaw('JSON_CONTAINS(material, \'["' . $material . '"]\')');
            }
        })->get();

        // Filter out menus that do not contain all specified materials
        $filteredMenus = $menus->filter(function ($menu) use ($materials) {
            return count(array_intersect($menu->material, $materials)) === count($materials);
        });

        // Randomly select a menu
        $randomMenu = $filteredMenus->random();

        return response()->json(['menus' => $randomMenu]);
    }
}
