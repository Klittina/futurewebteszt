<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'vezeteknev' => 'required',
            'keresztnev' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
         
    try {
        $user = User::create(request(['vezeteknev', 'keresztnev', 'email', 'password']));
        auth()->login($user);
        return redirect()->route('/loggedin');
    } catch (\Exception $e) {
        // Hiba történt, kezeljük a kivételt
        return back()->withInput()->withErrors(['error' => 'Hiba történt a regisztráció során.']);
    }
    }
}
