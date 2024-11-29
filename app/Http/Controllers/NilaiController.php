<?php


namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        // Jika permintaan adalah AJAX, ambil data tagihan untuk ditampilkan di tabel
        if (request()->ajax()) {
            $data = Nilai::with(['siswa', 'kelas','akademik'])->get(); // Ambil data dengan relasi
            return response()->json($data);
        }

        // Ambil semua data tagihan untuk ditampilkan di view
        $nilais = Nilai::all();
        return view('nilai.index', compact('nilais')); 
    }

    public function store(Request $request)
    {
        // Validasi data yang masuk
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'kelas_id' => 'required|exists:kelas,id',
            'akademik_id' => 'required|exists:akademiks,id',
            'agama' => 'required|string',
            'jatidiri' => 'required|string',
            'stem' => 'required|string',
            'project' => 'required|string',
        
        ]);

        // Buat tagihan baru
        Nilai::create($validated);

        return response()->json(['success' => 'Data tagihan berhasil disimpan!']);
    }

    public function edit($id)
    {
        // Ambil tagihan berdasarkan ID untuk diedit
        $tagihan = Nilai::findOrFail($id);
        return response()->json($tagihan);
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang masuk
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'kelas_id' => 'required|exists:kelas,id',
            'akademik_id' => 'required|exists:akademiks,id',
            'agama' => 'required|string',
            'jatidiri' => 'required|string',
            'stem' => 'required|string',
            'project' => 'required|string',
            

        ]);

        // Ambil tagihan yang akan diperbarui
        $nilai = Nilai::findOrFail($id);

        // Perbarui data tagihan
        $nilai->update($request->all());

        return response()->json(['success' => 'Data nilai berhasil diperbarui!']);
    }

    public function destroy($id)
    {
        // Ambil tagihan yang akan dihapus
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();

        return response()->json(['success' => 'Data nilai berhasil dihapus!']);
    }
}