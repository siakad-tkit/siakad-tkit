<?php

namespace App\Http\Controllers;// Import model Kelas
use App\Models\Akademik;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;


class AkademikController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $data = Akademik::all();
            return response()->json($data);
        }

        $akademiks = Akademik::all();
        return view('akademik.index', compact('akademiks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tahun' => 'required',
            'nama' => 'required',
        ]);

        Akademik::create($validated);

    return response()->json(['success' => 'Data akademik berhasil disimpan!']);
    }

    public function edit($id)
    {
        $akademiks = Akademik::findOrFail($id);
        return response()->json($akademiks);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tahun' => 'required',
            'nama' => 'required',
        ]);

        $akademiks = Akademik::findOrFail($id);

        $akademiks->update([
            'tahun' => $request->input('tahun'),
            'nama' => $request->input('nama'),
        ]);

        return response()->json(['success' => 'Data akademik berhasil diperbarui!', 'akademik' => $akademiks]);
    }

    public function destroy($id)
    {
        $akademiks = Akademik::findOrFail($id);
        $akademiks->delete();

        return response()->json(['success' => 'Data akademik berhasil dihapus!']);
    }
}
