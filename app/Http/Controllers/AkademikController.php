<?php

namespace App\Http\Controllers;
use App\Models\Akademik;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function index()
    {
        $akademiks = Akademik::latest()->paginate(5);
        return view('akademik.index', compact('akademiks'));
    }

    public function create()
    {
        return view('akademik.create');
    }
}
