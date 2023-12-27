<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('Pages.Customer.Home.Index', compact('produks'));
    }
}
