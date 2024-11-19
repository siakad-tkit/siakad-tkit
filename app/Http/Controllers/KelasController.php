<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class KelasController extends Controller
{
    public function index()
{
    if (request()->ajax()) {
        $data = Kelas::all();
        return response()->json($data);
    }

    $kelas = Kelas::all(); // Mendefinisikan $kelas
    return view('kelas.index', compact('kelas')); // Kirim $kelas ke view
}


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jml_siswa' => 'required|integer|min:0',
        ]);

        Kelas::create($validated);

    return response()->json(['success' => 'Kelas berhasil disimpan!']);
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jml_siswa' => 'required|integer|min:0',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->edit($request->all());

        return response()->json(['success' => 'Kelas berhasil diperbarui!', 'kelas' => $kelas]);
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return response()->json(['success' => 'Kelas berhasil dihapus!']);
    }
}
