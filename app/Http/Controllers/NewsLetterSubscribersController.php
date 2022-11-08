<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\WelcomeWishing;
use App\Models\NewsLetterSubscribers;
use Illuminate\Support\Facades\Mail;
use Spatie\Newsletter\NewsletterFacade;

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
        // dd($request->input());

        request()->validate([
            'email' => 'required|email'
        ]);

        $email = $request->email;

        try {
            if (NewsletterFacade::isSubscribed($email)) {
                return redirect()->back()->with('error', 'L\'email entrée existe déja');
                // $message = 'Email existant';
            } else {
                NewsletterFacade::subscribe($email);
                Mail::to($email)->send(new WelcomeWishing($email));
                return redirect()->back()->with('message', 'Souscription effectuée avec succès');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
            // $message = $e;
        }
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
