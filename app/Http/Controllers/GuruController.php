<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::latest()->paginate(5);
        return view('guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
            'bagian' => 'required',
            'nama' => 'required|min:3',
            'nip' => 'required|unique:gurus,nip',
            'nuptk' => 'required|unique:gurus,nuptk',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required',
            'status_nikah' => 'required',
            'kelamin' => 'required',
            'alamat' => 'required',
            'no' => 'required',
            'email' => 'required|email|unique:gurus,email',
            'mulai_kerja' => 'required|date',
        ]);
        
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('foto-guru', 'public');
        }

        Guru::create(array_merge($validatedData, ['foto' => $fotoPath]));

        return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Guru $guru)
    {
    return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
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
            if ($guru->foto) {
                Storage::disk('public')->delete($guru->foto);
            }

            $fotoPath = $request->file('foto')->store('foto-guru', 'public');
            $guru->foto = $fotoPath; 

            $guru->update([
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
            $guru->update([
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
        return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    public function destroy(Guru $guru)
    {
        if ($guru->foto) {
            Storage::disk('public')->delete($guru->foto);
        }
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus');
    }
}
