<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index()
    {
        // Jika permintaan adalah AJAX, ambil data tagihan untuk ditampilkan di tabel
        if (request()->ajax()) {
            $data = Tagihan::with(['siswa', 'kelas'])->get(); // Ambil data dengan relasi
            return response()->json($data);
        }

        // Ambil semua data tagihan untuk ditampilkan di view
        $tagihans = Tagihan::all();
        return view('tagihan.index', compact('tagihans')); 
    }

    public function store(Request $request)
    {
        // Validasi data yang masuk
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'kelas_id' => 'required|exists:kelas,id',
            'bulan' => 'required|string',
            'jenis' => 'required|string',
            'nominal' => 'required|numeric',
            'status' => 'required',
            'tanggal' => 'required|date',
        ]);

        // Buat tagihan baru
        Tagihan::create($validated);

        return response()->json(['success' => 'Data tagihan berhasil disimpan!']);
    }

    public function edit($id)
    {
        // Ambil tagihan berdasarkan ID untuk diedit
        $tagihan = Tagihan::findOrFail($id);
        return response()->json($tagihan);
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang masuk
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'kelas_id' => 'required|exists:kelas,id',
            'bulan' => 'required|string',
            'jenis' => 'required|string',
            'nominal' => 'required|numeric',
            'status' => 'required',
            'tanggal' => 'required|date',
        ]);

        // Ambil tagihan yang akan diperbarui
        $tagihan = Tagihan::findOrFail($id);

        // Perbarui data tagihan
        $tagihan->update($request->all());

        return response()->json(['success' => 'Data tagihan berhasil diperbarui!']);
    }

    public function destroy($id)
    {
        // Ambil tagihan yang akan dihapus
        $tagihan = Tagihan::findOrFail($id);
        $tagihan->delete();

        return response()->json(['success' => 'Data tagihan berhasil dihapus!']);
    }
}