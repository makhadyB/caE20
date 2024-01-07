<?php

namespace App\Http\Controllers;

use App\Models\Secteur;
use Illuminate\Http\Request;

class SecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secteur = Secteur::all();
        
        return view('secteur.index', compact('secteur'));
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
        $request->validate([
            'nomsecteur' => 'required|max:255', 
            'superficie' => 'required|numeric',
        ]);
        
        $secteur = new Secteur;

        $secteur->nomsecteur = $request->nomsecteur;
        $secteur->superficie = $request->superficie;

        $secteur->save();


        return redirect()->route('secteur.index')->with('success', 'secteur enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $secteur=Secteur::find($id);
        return view('secteur.detail', ['secteur' => $secteur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secteur = Secteur::findOrFail($id);
        return view('secteur.edit', compact('secteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $secteur =  Secteur::find($id);
        $secteur->nomsecteur = $request->nomsecteur;
        $secteur->superficie = $request->superficie;
        $secteur->update();
        return redirect()->route('secteur.index')->with('success', 'secteur modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $secteur = Secteur::find($id);
        $secteur->delete();
        return redirect()->route('secteur.index')->with('success', 'secteur supprimé');
    }
}
