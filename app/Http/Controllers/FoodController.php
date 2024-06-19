<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function filterByMaterial(Request $request)
    {
        // Get the materials array from the request
        $materials = $request->input('materials', []);
        $requestedAmount = $request->input('amount', 1);
        // Check if there are no materials
        if (empty($materials)) {
            $menu = Menu::all()->random($requestedAmount);
            return response()->json(['menus' => $menu]);
        } else {
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

            // Get the requested amount, defaulting to 1 if not provided

            // Check if there are enough filtered menus
            if ($filteredMenus->count() < $requestedAmount) {
                return response()->json([
                    'message' => 'You requested ' . $requestedAmount . ' items, but there are only ' . $filteredMenus->count() . ' items available.'
                ], 400); // 400 Bad Request
            }

            // Randomly select a menu
            $randomMenu = $filteredMenus->random($requestedAmount);

            return response()->json(['menus' => $randomMenu]);
        }
    }
}
