<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('admin.blog.index', compact('articles'));
    }

    public function blog()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('pages.blog', compact('articles'));
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
            'titre' => 'required',
            'description' => 'required',
            'poster' => 'required'
        ]);

        if (request('poster')) {
            $path = $request->file('poster')->store('articles', 'public');
        }

        $article = new Article;
        $article->titre = request('titre');
        $article->description = request('description');
        if (request('poster')) {
            $article->poster = $path;
        }
        $article->administrateur_id = session('admin')->id;
        // dd($article);
        $article->save();

        return redirect(route('admin.blog'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
        $article = Article::find($id);
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('pages.article', compact('article', 'articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
        $article = Article::where('id', $id)->first();
        if($article) {
            return view('admin.blog.edit', compact('article'));
        } else {
            return back();
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        //
        request()->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);

        $article = Article::find($id);
        // dd($article);

        if (request('poster')) {
            $path = $request->file('poster')->store('articles', 'public');
        }

        $article->titre = request('titre');
        $article->description = request('description');
        if (request('poster')) {
            $article->poster = $path;
        }
        // $article->administrateur_id = request('administrateur');
        // dd($article);
        $article->save();

        return redirect(route('admin.blog'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
        $article = Article::find($id);

        if ($article) {
            $article->delete();
            Alert::success('Suppression effectuée', 'Votre article a été supprimé avec succès');
            return redirect(route('admin.blog'));
        } else {
            return back();
        }
    }
}
