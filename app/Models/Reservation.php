<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lieu_id',
        'status',
    ];

    // Une réservation appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Une réservation appartient à un lieu
    public function lieu()
    {
        return $this->belongsTo(Lieu::class);
    }
}
