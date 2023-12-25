<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        $modifiedData = [];
        foreach ($produks as $produk) {
            $truncatedDeskripsi = Str::limit(strip_tags($produk->deskripsi), $limit = 20, $end = '...');

            $modifiedData[] = [
                'id' => $produk->id,
                'kategori_id' => $produk->kategori_id,
                'nama_produk' => $produk->nama_produk,
                'kode_produk' => $produk->kode_produk,
                'truncatedDeskripsi' => $truncatedDeskripsi,
                'foto' => $produk->foto,
                'harga' => 'Rp. ' . number_format($produk->harga, 0, ',', '.'),
                'stok' => $produk->stok,
            ];
        }
        return view('Pages.Admin.Produk.Index', compact('modifiedData'));
    }

    public function tambah()
    {
        $categories = Kategori::all();
        return view('Pages.Admin.Produk.Tambah', compact('categories'));
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required',
            'nama_produk' => 'required|max:255',
            'kode_produk' => 'required|max:255',
            'deskripsi' => 'required',
            'foto' => 'required|max:2048|mimes:jpg,png,jpeg',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->hashName();
            $file->storeAs('public/produk/', $fileName);
        } else {
            $fileName = null;
        }

        Produk::create([
            'kategori_id' => $request->kategori_id,
            'nama_produk' => $request->nama_produk,
            'kode_produk' => $request->kode_produk,
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()->route('admin.produk');
    }

    public function detail($id)
    {
        $produk = Produk::findOrFail($id);
        return view('Pages.Admin.Produk.Detail', compact('produk'));
    }

    public function edit($id)
    {
        $categories = Kategori::all();
        $produk = Produk::findOrFail($id);
        return view('Pages.Admin.Produk.Edit', compact('produk', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori_id' => 'required',
            'nama_produk' => 'required|max:255',
            'kode_produk' => 'required|max:255',
            'deskripsi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $produk = Produk::findOrFail($id);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->hashName();
            $file->storeAs('public/produk/', $fileName);

            if (Storage::exists('public/produk/' . $produk->foto)) {
                Storage::delete('public/produk/' . $produk->foto);
            }

            $produk->update([
                'kategori_id' => $request->kategori_id,
                'nama_produk' => $request->nama_produk,
                'kode_produk' => $request->kode_produk,
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName,
                'harga' => $request->harga,
                'stok' => $request->stok,
            ]);
        } else {
            $produk->update([
                'kategori_id' => $request->kategori_id,
                'nama_produk' => $request->nama_produk,
                'kode_produk' => $request->kode_produk,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'stok' => $request->stok,
            ]);
        }

        return redirect()->route('admin.produk');
    }

    public function delete($id)
    {
        $produk = Produk::findOrFail($id);
        if (Storage::exists('public/produk/' . $produk->foto)) {
            Storage::delete('public/produk/' . $produk->foto);
        }
        $produk->delete();
        return redirect()->route('admin.produk');
    }

    public function download($id)
    {
        $produk = Produk::findOrFail($id);
        $pdf = Pdf::loadView('Pages.Admin.Produk.Cetak', compact('produk'));
        return $pdf->download('produk.pdf');
    }
}
