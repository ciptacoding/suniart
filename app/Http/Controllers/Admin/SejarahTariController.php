<?php

namespace App\Http\Controllers\Admin;

use App\Models\SejarahTari;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SejarahTariController extends Controller
{
    public function index()
    {
        $sejarahTari = SejarahTari::all();
        $modifiedData = [];
        foreach ($sejarahTari as $tari) {
            $truncatedDeskripsi = Str::limit(strip_tags($tari->deskripsi), $limit = 60, $end = '...');

            $modifiedData[] = [
                'id' => $tari->id,
                'nama' => $tari->nama,
                'truncatedDeskripsi' => $truncatedDeskripsi,
            ];
        }
        return view('Pages.Admin.Sejarah.Index', compact('modifiedData'));
    }

    public function tambah()
    {
        return view('Pages.Admin.Sejarah.Tambah');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required|min:10'
        ]);

        SejarahTari::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.sejarah');
    }

    public function detail($id)
    {
        $sejarahTari = SejarahTari::findOrFail($id);
        return view('Pages.Admin.Sejarah.Detail', compact('sejarahTari'));
    }

    public function edit($id)
    {
        $sejarahTari = SejarahTari::findOrFail($id);
        return view('Pages.Admin.Sejarah.Edit', compact('sejarahTari'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required|min:10'
        ]);

        $sejarahTari = SejarahTari::findOrFail($id);

        $sejarahTari->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.sejarah');
    }

    public function delete($id)
    {
        $sejarahTari = SejarahTari::findOrFail($id);
        $sejarahTari->delete();
        return redirect()->route('admin.sejarah');
    }
}
