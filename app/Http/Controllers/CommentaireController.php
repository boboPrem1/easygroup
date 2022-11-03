<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        request()->validate([
            'nom' => 'required',
            'email' => 'required',
            'description' => 'required',
            'article' => 'required'
        ]);

        $commentaire = new Commentaire;

        $commentaire->nom = request('nom');
        $commentaire->email = request('email');
        $commentaire->slug = request('slug');
        $commentaire->description = request('description');
        $commentaire->article_id = request('article');
        // dd($commentaire);
        $commentaire->save();

        Alert::success('Commentaire ajouté', 'Consultez encore plus d\'articles');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        //
        request()->validate([
            'nom' => 'required',
            'email' => 'required',
            'description' => 'required',
            'article' => 'required'
        ]);

        $commentaire->nom = request('nom');
        $commentaire->email = request('email');
        $commentaire->slug = request('slug');
        $commentaire->description = request('description');
        $commentaire->article_id = request('article');
        dd($commentaire);
        $commentaire->save();

        Alert::success('Commentaire ajouté', 'Consultez encore plus d\'articles');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        //
    }
}
