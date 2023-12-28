<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produk;

class CustomerProdukController extends Controller
{
    public function detailProduk($id)
    {
        $produk = Produk::findOrFail($id);
        return view('Pages.Customer.Produk.Detail', compact('produk'));
    }
}
