<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'description'];

    // Une catégorie peut avoir plusieurs lieux
    public function lieux()
    {
        return $this->hasMany(Lieu::class);
    }
}
