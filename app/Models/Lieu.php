<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    use HasFactory;
    protected $fillable = [
       'libelle',
       'latitude',
       'photo',
       'adresse',
       'heure_ouverture',
       'prix', 
    ];

    // Un lieu peut avoir plusieurs réservations
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    // Un lieu peut avoir plusieurs commentaires
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    // Un lieu appartient à une catégorie
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
