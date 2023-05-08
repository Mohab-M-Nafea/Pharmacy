<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\View\View;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'perm']);
    }

    public function index(): View
    {
        $total_medicines = Medicine::all()->count();
        $total_suppliers = Supplier::all()->count();
        $total_cashiers = User::all()->where('permission', '=', '0')->count();

        return view('admin.index', compact('total_medicines', 'total_suppliers', 'total_cashiers'));
    }
}
