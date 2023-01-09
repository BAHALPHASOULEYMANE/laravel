<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    use HasFactory;
    protected $fillable = array('nom', 'duree', 'priorite') ;
    public static $rules = array(
       // 'projet_id' => 'required|integer',
        'nom' => 'required|min:4',
        'duree' => 'required|min:2',
        'priorite' => 'required|min:3',
    );
    public function projet()
    {
        return $this->belongsTo('App\Projet');
    }
}
