<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'type_material_id',
    ];

    /**
     * Get the type of material that belongs to the material.
     */
    public function type()
    {
        return $this->belongsTo(TypeMaterial::class, 'type_material_id');
    }

}
