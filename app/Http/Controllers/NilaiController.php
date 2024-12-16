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
      
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'kelas_id' => 'required|exists:kelas,id',
            'akademik_id' => 'required|exists:akademiks,id',
            'file' => 'nullable|mimes:ppt,pptx,pdf,doc,docx',
        ]);

        $nilai = Nilai::findOrFail($id);

        if ($request->hasFile('file')) {
            
            if ($nilai->file) {
                Storage::delete('public/' . $nilai->file);
            }
            
            $file = $request->file('file')->store('file-raport', 'public');
            $data['file'] = $file;
        }
        $nilai = Nilai::findOrFail($id);

        
        $nilai->update($request->all());

        return response()->json(['success' => 'Data nilai berhasil diperbarui!']);
    }

    public function destroy($id)
    {
        
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();

        return response()->json(['success' => 'Data nilai berhasil dihapus!']);
    }
}