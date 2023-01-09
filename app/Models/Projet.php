<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = array('nom', 'description', 'datedebut' , 'datefin') ;
    public static $rules = array('nom'=>'required|min:6',
                                'description'=>'required|min:15',
                                'datedebut'=>'required|min:3',
                                'datefin'=>'required|min:3',
                                'projet_id'=>'required|min:3',
);
    public function projet()
    {
        return $this->hasMany('App\Phrase');
    }
}
