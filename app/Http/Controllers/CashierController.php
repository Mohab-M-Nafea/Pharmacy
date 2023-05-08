<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CashierController extends Controller
{
    public function dashboard()
    {
        return view('cashier.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cashiers = User::all()->where('permission', '=', 0);

        return view('admin.Cashier.cashier', compact('cashiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Cashier.add_cashier');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:8']
        ]);

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.cashier');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cashier = User::findorFail($id);

        return view('admin.Cashier.edit_cashier', compact('cashier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cashier = User::findorFail($id);

        $request->validate([
            'name' => ['required'],
            'username' => ['required', 'unique:users,username,' . $id . ',user_id'],
            'email' => ['required', 'unique:users,email,' . $id . ',user_id'],
//            'password' => ['required', 'min:8']
        ]);

        $cashier->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'username' => $request->username,
//            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.cashier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);

        return redirect()->route('admin.cashier');
    }
}
