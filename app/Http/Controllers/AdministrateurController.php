<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admins = Administrateur::All();
        return view('admin.admins.index', compact('admins'));
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

    public function login()
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $administrateur = Administrateur::where('email', request('email'))->where('password', request('password'))->first();

        if ($administrateur) {
            session([
                'admin' => $administrateur
            ]);
            // dd(session('admin'));
            return redirect(route('admin.index'));
        } else {
            return back();
        }
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
            'prenom' => 'required',
            'email' => 'required',
            'password' => 'required',
            'profil' => 'required'
        ]);

        // dd($request->file('profil'));

        if (request('profil')) {
            $path = $request->file('profil')->store('profils', 'public');
        }

        // dd('ok');
        $administrateur = new Administrateur;

        $administrateur->nom = request('nom');
        $administrateur->prenom = request('prenom');
        $administrateur->email = request('email');
        $administrateur->password = request('password');
        if (request('profil')) {
            $administrateur->profil = $path;
        }
        $administrateur->role = "user";
        $administrateur->active = false;
        $administrateur->save();

        // alert("Inscription avec succès!", "Veuillez contacter l'administrateur pour l'activation de votre compte!");
        Alert::success('Inscription effectuée!', 'Veuillez contacter l\'administrateur pour l\'activation de votre compte!');

        return redirect(route('login'));
    }

    public function setRole(int $id)
    {
        $admin = Administrateur::where('id', $id)->first();
        if ($admin->role == "user") {
            $admin->role = "redacteur";
        } else {
            $admin->role = "admin";
        }
        $admin->save();

        Alert::success('Opération effectuée', 'Votre compte a changé de rôle avec succès');

        return redirect(route('admins.index'));
    }

    public function activate(int $id)
    {
        $admin = Administrateur::where('id', $id)->first();

        $admin->active = !$admin->active;

        $admin->save();

        Alert::success('Opération effectuée', 'Votre compte a changé de statut avec succès');

        return redirect(route('admins.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function show(Administrateur $administrateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrateur $administrateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrateur $administrateur)
    {
        //
        request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'passsword' => 'required'
        ]);

        $administrateur->nom = request('nom');
        $administrateur->prenom = request('prenom');
        $administrateur->email = request('email');
        $administrateur->password = request('password');
        $administrateur->save();

        // return redirect(route(''));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        Session::flush();
        return redirect(route('login'));
    }
}
