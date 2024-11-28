<?php

namespace App\Http\Controllers;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $data = Absensi::all();
            return response()->json($data);
        }

        $absensis = Absensi::all();
        return view('absensi.index', compact('absensis'));
    }

    public function fetchabsensi()
    {
        $absensis = Absensi::with(['siswa', 'kelas'])->get();

        return response()->json(['data' => $absensis]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'siswa_id' => 'required|exists:siswas,id',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        Absensi::create($validated);

    return response()->json(['success' => 'Data absensi berhasil disimpan!']);
    }

    public function edit($id)
    {
        $absensis = Absensi::findOrFail($id);
        return response()->json($absensis);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'siswa_id' => 'required|exists:siswas,id',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $absensis = Absensi::findOrFail($id);

        $absensis->update([
            'tanggal' => $request->tanggal,
            'siswa_id' => $request->siswa_id,
            'kelas_id' => $request->kelas_id,
        ]);

        return response()->json(['success' => 'Data absensi berhasil diperbarui!', 'absensi' => $absensis]);
    }

    public function destroy($id)
    {
        $absensis = Absensi::findOrFail($id);
        $absensis->delete();

        return response()->json(['success' => 'Data absensi berhasil dihapus!']);
    }
}
