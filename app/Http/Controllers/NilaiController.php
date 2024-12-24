<?php


namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class NilaiController extends Controller
{
    public function index()
    {
        
        if (request()->ajax()) {
            $data = Nilai::with(['siswa', 'kelas','akademik'])->get(); 
            return response()->json($data);
        }

        
        $nilais = Nilai::all();
        return view('nilai.index', compact('nilais')); 
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'kelas_id' => 'required|exists:kelas,id',
            'akademik_id' => 'required|exists:akademiks,id',
            'file' => 'required|mimes:pdf,ppt,pptx,doc,docx',
        
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file'); // Mengambil file dari request
            $originalName = $file->getClientOriginalName(); // Mendapatkan nama asli file
            $filePath = $file->storeAs('file-raport', $originalName, 'public'); // Simpan file dengan nama asli
            $validated['file'] = $originalName; // Simpan hanya nama file ke database
        }
        
     
        Nilai::create($validated);
        

        return response()->json(['success' => 'Data tagihan berhasil disimpan!']);
    }

    public function edit($id)
    {
        
        $nilais = Nilai::findOrFail($id);
        return response()->json($nilais);
    }

    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'siswa_id' => 'required|exists:siswas,id',
        'kelas_id' => 'required|exists:kelas,id',
        'akademik_id' => 'required|exists:akademiks,id',
        'file' => 'nullable|mimes:ppt,pptx,pdf,doc,docx|max:2048',
    ]);

    // Temukan data yang akan diperbarui
    $nilai = Nilai::findOrFail($id);

    // Cek apakah ada file baru yang diunggah
    if ($request->hasFile('file')) {
        // Hapus file lama jika ada
        if ($nilai->file) {
            Storage::delete('public/' . $nilai->file);
        }

        // Simpan file baru ke 'file-raport' di storage/public
        $file = $request->file('file');
        $fileName = time() . '-' . $file->getClientOriginalName(); // Nama file unik
        $filePath = $file->storeAs('file-raport', $fileName, 'public'); // Simpan file

        // Perbarui kolom file di data nilai
        $nilai->file = 'file-raport/' . $fileName;
    }

    // Perbarui data lainnya
    $nilai->siswa_id = $request->siswa_id;
    $nilai->kelas_id = $request->kelas_id;
    $nilai->akademik_id = $request->akademik_id;

    // Simpan perubahan
    $nilai->save();

    return response()->json(['success' => 'Data nilai berhasil diperbarui!']);
}


    public function destroy($id)
    {
        
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();

        return response()->json(['success' => 'Data nilai berhasil dihapus!']);
    }
}