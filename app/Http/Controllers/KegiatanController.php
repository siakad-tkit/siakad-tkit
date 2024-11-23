<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $data = Kegiatan::all();
            return response()->json($data);
        }

        $kegiatans = Kegiatan::all(); 
        return view('kegiatan.index', compact('kegiatans')); 
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bulan' => 'required',
            'minggu' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'kegiatan' => 'required',
        ]);

        Kegiatan::create($validated);

    return response()->json(['success' => 'Data kegiatan berhasil disimpan!']);
    }

    public function edit($id)
    {
        $kegiatans = Kegiatan::findOrFail($id);
        return response()->json($kegiatans);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'bulan' => 'required',
            'minggu' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'kegiatan' => 'required',
        ]);

        $kegiatans = Kegiatan::findOrFail($id);

        $kegiatans->update([
            'bulan' => $request->input('bulan'),
            'minggu' => $request->input('minggu'),
            'hari' => $request->input('hari'),
            'tanggal' => $request->input('tanggal'),
            'kegiatan' => $request->input('kegiatan'),
        ]);

        return response()->json(['success' => 'Data kegiatan berhasil diperbarui!', 'kegiatan' => $kegiatans]);
    }

    public function destroy($id)
    {
        $kegiatans = Kegiatan::findOrFail($id);
        $kegiatans->delete();

        return response()->json(['success' => 'Data kegiatan berhasil dihapus!']);
    }
}
