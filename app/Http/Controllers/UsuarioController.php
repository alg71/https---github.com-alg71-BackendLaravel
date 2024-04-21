<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('registro');
    }

    public function delete()
    {
        return view('delete');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        Usuario::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/');
    }

    public function destroy(Request $request)
{
    $request->validate([
        'id' => 'required',        
    ]);

    Usuario::destroy($request->id);
    
    return response()->json(['message' => 'Usuario eliminado correctamente'], 200);

}

}
