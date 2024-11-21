<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::latest()->paginate(5);
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|min:5',
            'panggilan' => 'required|min:3',
            'no_induk' => 'required|min:3',
            'nisn' => 'required',
            'kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required',
            'anak_ke' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'no' => 'required',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('foto-siswa', 'public');
        }

        Siswa::create(array_merge($validatedData, ['foto' => $fotoPath]));

        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Siswa $siswa)
    {
    return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'foto' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|min:3',
            'nip' => 'required|min:2',
            'status' => 'required',
            'bagian' => 'required',
            'nuptk' => 'required|min:3',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required',
            'status_nikah' => 'required',
            'kelamin' => 'required',
            'alamat' => 'required',
            'no' => 'required',
            'email' => 'required|email',
            'mulai_kerja' => 'required|date',
        ]);

        if ($request->hasFile('foto')) {
            if ($siswa->foto) {
                Storage::disk('public')->delete($siswa->foto);
            }

            $fotoPath = $request->file('foto')->store('foto-siswa', 'public');
            $siswa->foto = $fotoPath; 

            $siswa->update([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'status' => $request->status,
                'bagian' => $request->bagian,
                'nuptk' => $request->nuptk,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'agama' => $request->agama,
                'status_nikah' => $request->status_nikah,
                'kelamin' => $request->kelamin,
                'alamat' => $request->alamat,
                'no' => $request->no,
                'email' => $request->email,
                'mulai_kerja' => $request->mulai_kerja,
            ]);
        } else {
            $siswa->update([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'status' => $request->status,
                'bagian' => $request->bagian,
                'nuptk' => $request->nuptk,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'agama' => $request->agama,
                'status_nikah' => $request->status_nikah,
                'kelamin' => $request->kelamin,
                'alamat' => $request->alamat,
                'no' => $request->no,
                'email' => $request->email,
                'mulai_kerja' => $request->mulai_kerja,
            ]);
        }
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Siswa $siswa)
    {
        if ($siswa->foto) {
            Storage::disk('public')->delete($siswa->foto);
        }
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus');
    }
}
