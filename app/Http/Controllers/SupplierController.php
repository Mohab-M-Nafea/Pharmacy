<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $suppliers = Supplier::all();

        return view('admin.Supplier.supplier', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'supplier_name' => ['required'],
            'supplier_phone' => ['required'],
            'supplier_email' => ['required', 'unique:suppliers'],
            'supplier_address' => ['required'],
        ]);

        Supplier::create([
            'supplier_name' => $request->supplier_name,
            'supplier_phone' => $request->supplier_phone,
            'supplier_email' => $request->supplier_email,
            'supplier_address' => $request->supplier_address,
        ]);

        return redirect()->route('admin.supplier');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.Supplier.add_supplier');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($supplier_id): View
    {
        $supplier = Supplier::findorFail($supplier_id);

        return view('admin.Supplier.edit_supplier', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $supplier_id): RedirectResponse
    {
        $supplier = Supplier::findorFail($supplier_id);

        $request->validate([
            'supplier_name' => ['required'],
            'supplier_phone' => ['required'],
            'supplier_email' => ['required', 'unique:suppliers,supplier_email,' . $supplier_id . ',supplier_id'],
            'supplier_address' => ['required'],
        ]);

        $supplier->update([
            'supplier_name' => $request->supplier_name,
            'supplier_phone' => $request->supplier_phone,
            'supplier_email' => $request->supplier_email,
            'supplier_address' => $request->supplier_address,
        ]);

        return redirect()->route('admin.supplier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($supplier_id): RedirectResponse
    {
        Supplier::destroy($supplier_id);

        return redirect()->route('admin.supplier');
    }
}
