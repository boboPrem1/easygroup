<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsLetterSubscribers;
use RealRashid\SweetAlert\Facades\Alert;

class NewsLetterSubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subscribers = NewsLetterSubscribers::All();
        return view('admin.newsletter.index', compact('subscribers'));
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
        // dd('ok');
        request()->validate([
            'email' => 'required'
        ]);

        $subscriber = new NewsLetterSubscribers;
        $subscriber->nom = request('nom');
        $subscriber->email = request('email');
        // dd($subscriber);
        $subscriber->save();

        Alert::success('Email ajouté', 'Vous recevrez désormais toutes les notifications');


        return redirect(route('mail.send'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsLetterSubscribers  $newsLetterSubscribers
     * @return \Illuminate\Http\Response
     */
    public function show(NewsLetterSubscribers $newsLetterSubscribers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsLetterSubscribers  $newsLetterSubscribers
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsLetterSubscribers $newsLetterSubscribers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsLetterSubscribers  $newsLetterSubscribers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsLetterSubscribers $newsLetterSubscribers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsLetterSubscribers  $newsLetterSubscribers
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsLetterSubscribers $newsLetterSubscribers)
    {
        //
    }
}
