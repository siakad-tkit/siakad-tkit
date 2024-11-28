<?php

namespace App\Http\Controllers;
use App\Models\Penugasan;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class PenugasanController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $data = Penugasan::all();
            return response()->json($data);
        }

        $penugasans = Penugasan::all(); 
        return view('penugasan.index', compact('penugasans')); 
    }

    public function fetchPenugasan()
    {
        // Mengambil data penugasans dengan relasi guru dan kelas
        $penugasans = Penugasan::with(['guru', 'kelas'])->get();

        return response()->json(['data' => $penugasans]);
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'guru_id' => 'required|exists:gurus,id',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        Penugasan::create($validated);

    return response()->json(['success' => 'Data penugasan berhasil disimpan!']);
    }

    public function edit($id)
    {
        $penugasans = Penugasan::findOrFail($id);
        return response()->json($penugasans);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'guru_id' => 'required|exists:gurus,id',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $penugasans = Penugasan::findOrFail($id);

        $penugasans->update([
            'guru_id' => $request->guru_id,
            'kelas_id' => $request->kelas_id,
        ]);

        return response()->json(['success' => 'Data penugasan berhasil diperbarui!', 'penugasan' => $penugasans]);
    }

    public function destroy($id)
    {
        $penugasans = Penugasan::findOrFail($id);
        $penugasans->delete();

        return response()->json(['success' => 'Data penugasan berhasil dihapus!']);
    }
}
