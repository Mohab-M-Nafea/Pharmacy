<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct()
    {
//        $this->middleware(['guest']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $credentials = $request->only(['username', 'password']);
        $credentials['permission'] = isset($request->admin) ? 1 : 0;

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route($credentials['permission'] ? 'admin' : 'cashier');
        }


        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('profile');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'username' => ['required', 'unique:users,username,' . auth()->user()->getAuthIdentifier() . ',user_id'],
            'email' => ['required', 'unique:users,email,' . auth()->user()->getAuthIdentifier() . ',user_id'],
//            'password' => ['required', 'min:8']
        ]);

        auth()->user()->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'username' => $request->username,
//            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
