<?php

namespace App\Http\Controllers;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class TagihanController extends Controller
{
     // Method to display the list of Tagihan
     public function index()
     {
         // Retrieve all tagihan records from the database
         $tagihans = Tagihan::all(); 
 
         // Return the view with tagihans data
         return view('tagihan.index', compact('tagihans'));
     }
 
     // Method to show the form for creating a new tagihan
     public function create()
     {
         return view('tagihan.create');
     }
 
     // Method to store a new tagihan
     public function store(Request $request)
     {
         // Validate the incoming request
         $request->validate([
             'tanggal' => 'required|date',
             'nama_siswa' => 'required|string|max:255',
             'nama_kelas' => 'required|string|max:255',
             'jenis_tagihan' => 'required|string|max:255',
             'total_tagihan' => 'required|numeric',
         ]);
 
         // Create a new tagihan record
         Tagihan::create([
             'tanggal' => $request->tanggal,
             'nama_siswa' => $request->nama_siswa,
             'nama_kelas' => $request->nama_kelas,
             'jenis_tagihan' => $request->jenis_tagihan,
             'total_tagihan' => $request->total_tagihan,
         ]);
 
         // Redirect to the index page with success message
         return redirect()->route('tagihan.index')->with('success', 'Tagihan created successfully.');
     }
 
     // Method to show a specific tagihan (if needed)
     public function show($id)
     {
         $tagihan = Tagihan::findOrFail($id);
         return view('tagihan.show', compact('tagihan'));
     }
 
     // Method to edit a tagihan
     public function edit($id)
     {
         $tagihan = Tagihan::findOrFail($id);
         return view('tagihan.edit', compact('tagihan'));
     }
 
     // Method to update a tagihan
     public function update(Request $request, $id)
     {
         $tagihan = Tagihan::findOrFail($id);
 
         // Validate the incoming request
         $request->validate([
             'tanggal' => 'required|date',
             'nama_siswa' => 'required|string|max:255',
             'nama_kelas' => 'required|string|max:255',
             'jenis_tagihan' => 'required|string|max:255',
             'total_tagihan' => 'required|numeric',
         ]);
 
         // Update the tagihan record
         $tagihan->update([
             'tanggal' => $request->tanggal,
             'nama_siswa' => $request->nama_siswa,
             'nama_kelas' => $request->nama_kelas,
             'jenis_tagihan' => $request->jenis_tagihan,
             'total_tagihan' => $request->total_tagihan,
         ]);
 
         // Redirect to the index page with success message
         return redirect()->route('tagihan.index')->with('success', 'Tagihan updated successfully.');
     }
 
     // Method to delete a tagihan
     public function destroy($id)
     {
         $tagihan = Tagihan::findOrFail($id);
         $tagihan->delete();
 
         return redirect()->route('tagihan.index')->with('success', 'Tagihan deleted successfully.');
     }
 }