<?php

namespace App\Models;

use App\Models\Commentaire;
use App\Models\Administrateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function administrateur()
    {
        return $this->belongsTo(Administrateur::class);
    }
}
