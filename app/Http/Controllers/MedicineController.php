<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Medicine;
use App\Models\Supplier;
use App\Traits\UploadeImageTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MedicineController extends Controller
{
    use UploadeImageTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $medicines = Medicine::all();

        return view('admin.Medicine.medicine', compact('medicines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'medicine_code' => ['required', 'unique:medicines'],
            'medicine_name' => ['required', 'unique:medicines'],
            'medicine_description' => ['required'],
            'medicine_purchase_price' => ['required', 'numeric'],
            'medicine_retail_price' => ['required', 'numeric'],
            'medicine_quantity' => ['required', 'integer'],
            'medicine_unit' => ['required'],
            'medicine_expired_date' => ['required'],
            'medicine_image' => ['image'],
            'category' => ['required', 'exists:categories,category_id'],
            'supplier' => ['required', 'exists:suppliers,supplier_id'],
        ]);

        $image_path = $request->has('medicine_image') ? $this->uploadImage($request, 'medicine_image', 'medicines') : null;

        Medicine::create([
            'medicine_code' => $request->medicine_code,
            'medicine_name' => $request->medicine_name,
            'medicine_description' => $request->medicine_description,
            'medicine_generic_name' => $request->medicine_generic_name,
            'medicine_purchase_price' => $request->medicine_purchase_price,
            'medicine_retail_price' => $request->medicine_retail_price,
            'medicine_quantity' => $request->medicine_quantity,
            'medicine_unit' => $request->medicine_unit,
            'medicine_expired_date' => $request->medicine_expired_date,
            'medicine_image' => $image_path,
            'category_id' => $request->category,
            'supplier_id' => $request->supplier,
        ]);

        return redirect()->route('admin.medicine');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('admin.Medicine.add_medicine', compact('categories', 'suppliers'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($medicine_id): View
    {
        $medicine = Medicine::findorFail($medicine_id);

        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('admin.Medicine.edit_medicine', compact('medicine', 'categories', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $medicine_id): RedirectResponse
    {
        $medicine = Medicine::findorFail($medicine_id);

        $request->validate([
            'medicine_code' => ['required', 'unique:medicines,medicine_code,' . $medicine_id . ',medicine_id'],
            'medicine_name' => ['required', 'unique:medicines,medicine_name,' . $medicine_id . ',medicine_id'],
            'medicine_description' => ['required'],
            'medicine_purchase_price' => ['required', 'numeric'],
            'medicine_retail_price' => ['required', 'numeric'],
            'medicine_quantity' => ['required', 'integer'],
            'medicine_unit' => ['required'],
            'medicine_expired_date' => ['required'],
            'medicine_image' => ['image'],
            'category' => ['required', 'exists:categories,category_id'],
            'supplier' => ['required', 'exists:suppliers,supplier_id'],
        ]);

        $image_path = $request->has('medicine_image') ? $this->uploadImage($request, 'medicine_image', 'medicines') : null;

        $medicine->update([
            'medicine_code' => $request->medicine_code,
            'medicine_name' => $request->medicine_name,
            'medicine_description' => $request->medicine_description,
            'medicine_generic_name' => $request->medicine_generic_name,
            'medicine_purchase_price' => $request->medicine_purchase_price,
            'medicine_retail_price' => $request->medicine_retail_price,
            'medicine_quantity' => $request->medicine_quantity,
            'medicine_unit' => $request->medicine_unit,
            'medicine_expired_date' => $request->medicine_expired_date,
            'medicine_image' => $image_path,
            'category_id' => $request->category,
            'supplier_id' => $request->supplier,
        ]);

        return redirect()->route('admin.medicine');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($medicine_id): RedirectResponse
    {
        Medicine::destroy($medicine_id);

        return redirect()->route('admin.medicine');
    }
}
