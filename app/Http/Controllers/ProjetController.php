<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    //
    public function add()
    {
        return view('projet.add');
    }
    public function edit($id)
    {
        return view('projet.edit');
    }
    public function getAll()
    {
        $listeprojets = Projet::all();
        return view('projet.list' , ['listeprojets' => $listeprojets]);
    }
    public function update(Request $request)
    {
        $projet =  Projet::find($request->id);
        $projet->nom = $request->nom;
        $projet->description = $request->description;
        $projet->datedebut = $request->datedebut;
        $projet->datefin = $request->datefin;

        $result = $projet->save();//1 ou 0
        return $this->getAll();
    }
    public function persist(Request $request)
    {
        $projet = new Projet();
        $projet->nom = $request->nom;
       // $projet->projet_id = $request->projet_id;
        $projet->description = $request->description;
        $projet->datedebut = $request->datedebut;
        $projet->datefin = $request->datefin;

        $result = $projet->save();//1 ou 0
        return view('projet.add',['confirmation' => $result]); 
    }
}
