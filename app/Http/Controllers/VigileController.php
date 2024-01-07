<?php

namespace App\Http\Controllers;

use App\Models\Secteur;
use App\Models\Vigile;
use Illuminate\Http\Request;

class VigileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secteur = Secteur::all();
        $v = Vigile::all();
        return view('vigile.index',compact('secteur','v'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $vig = new Vigile;
        
        $vig->prenom = $request->prenom;
        $vig->nom = $request->nom;
        $vig->naissance= $request->naissance;
        $vig->sexe = $request->sexe;
        $vig->taille = $request->taille;
        $vig->poids = $request->poids;
        $vig->secteur_id = $request->secteur_id;
        
        $vig->save();
        return redirect()->route('vigile.index')->with('success','vigile enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vigile  $vigile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vigile = Vigile::find($id); 

        return view('vigile.detail', ['vigile' => $vigile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vigile  $vigile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vigile = Vigile::findOrFail($id);
        return view('vigile.edit', compact('vigile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vigile  $vigile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vigile =Vigile::find($id);
        $vigile->nom = $request->nom;
        $vigile->update();
        return redirect()->route('vigile.index')->with('success', 'vigile modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vigile  $vigile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vigile = Vigile::find($id);
        $vigile->delete();
        return redirect()->route('vigile.index')->with('success', 'vigile supprimé');
    }
}
