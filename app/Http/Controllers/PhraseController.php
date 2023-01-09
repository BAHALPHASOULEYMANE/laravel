<?php

namespace App\Http\Controllers;

use App\Models\Phrase;
use App\Models\Projet;
use Illuminate\Http\Request;

class PhraseController extends Controller
{
    //
    public function add()
    {
        $projets = Projet::all();
        return view('phrase.add', ['projets' => $projets]);
    }
    public function getAll()
    {
        $listephrases = Phrase::all();
        return view('phrase.list' , ['listephrases' => $listephrases]);
    }

    public function update(Request $request)
    {
        $phrase =  Phrase::find($request->id);
        $phrase->nom = $request->nom;
        $phrase->projet_id = $request->projet_id;
        $phrase->duree = $request->duree;
        $phrase->priorite = $request->priorite;

        $result = $phrase->save();//1 ou 0
        return $this->getAll();
    }
    public function persist(Request $request)
    {
        $phrase = new Phrase();
        $phrase->nom = $request->nom;
        //$phrase->projet_id= $request->proje_id;
        $phrase->duree = $request->duree;
        $phrase->priorite = $request->priorite;

        $result = $phrase->save();//1 ou 0
        return view('phrase.add',['confirmation' => $result]); 
    }
}

