<?php

namespace App\Http\Controllers;
use App\Models\Bunga;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class BungaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data bunga
        $bungas = Bunga::all();

        // Kirim data bunga ke view
        return view('dashboard.index', ['bungas' => $bungas]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bunga = new Bunga;
        $bunga->name = $request->input('name');
        $bunga->description = $request->input('description');
        $bunga->price = $request->input('price');
        $bunga->save();

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function showProducts()
    {
        $bunga = Bunga::get(); // Ubah Bunga::all() menjadi Bunga::get()
        return view('dashboard.products', compact('bunga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bunga = Bunga::find($id);
        return view('dashboard.edit', compact('bunga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bunga = Bunga::find($id);
        $bunga->name = $request->input('name');
        $bunga->description = $request->input('description');
        $bunga->price = $request->input('price');
        $bunga->save();

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bunga = Bunga::find($id);
        $bunga->delete();

        return redirect('/dashboard');
    }

    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/dashboard');
        }

        // Authentication failed...
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    /**
     * Show the signup form.
     */
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    /**
     * Handle the signup request.
     */
    public function signup(Request $request)
    {
        $user = new User;
        $user->user_type = $request->input('userType');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/');
    }
}