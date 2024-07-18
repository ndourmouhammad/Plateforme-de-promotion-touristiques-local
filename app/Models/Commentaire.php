<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenu',
        'user_id',
        'lieu_id',
        'libelle',
    ];

    // Un commentaire appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Un commentaire appartient à un lieu
    public function lieu()
    {
        return $this->belongsTo(Lieu::class);
    }
}
