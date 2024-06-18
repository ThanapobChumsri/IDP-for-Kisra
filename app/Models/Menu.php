<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'type_menu_id',
        'material',
        'image',
        'detail',
        'price',
        'cal',
    ];

    /**
     * Get the type of menu that belongs to the menu.
     */
    protected $casts = [
        'material' => 'array',
    ];
    public function materials()
    {
        return $this->belongsToMany(Material::class, 'menu_material', 'menu_id', 'material_id');
    }
}
