<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    
    public function index()
    {
        if (request()->ajax()) {
            $data = User::all();
            return response()->json($data);
        }

        $users = User::all();
        return view('user.index', compact('users'));
    }

    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['success' => 'User berhasil dihapus']);
    }
}
