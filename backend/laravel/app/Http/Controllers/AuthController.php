<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Candidat;
use App\Models\Electeur;
use App\Models\ElecteursValides;
use App\Models\CodeSecurite;
use App\Mail\CodeSecuriteMail;

class AuthController extends Controller
{
    // Affiche le formulaire d'inscription
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Gère l'inscription d'un utilisateur
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Création de l'utilisateur dans la base de données
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.login.form')->with('success', 'Inscription réussie ! Connectez-vous maintenant.');
    }

    // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Gère la connexion de l'utilisateur
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dge.dashboard'); // Redirection après connexion
        }

        return back()->withErrors(['email' => 'Email ou mot de passe incorrect']);
    }

//  Déconnexion des utilisateurss
public function logout()
{
    Auth::logout();
    return view('dge/accueil');
}
}