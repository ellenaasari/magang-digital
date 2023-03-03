<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class StudentManagerController extends Controller
{
    public function index(){
        $users = DB::table('users')
                    ->join('model_has_roles', 'model_has_roles.model_id','=','users.id')
                    ->join('roles','roles.id','=','model_has_roles.role_id')
                    ->where('users.id','!=', 1)
                    ->where('roles.name','=', 'Student Manager')
                    ->select('users.*', 'roles.name as role_name')
                    ->get();
                    return view('layouts.kesiswaan.daftar-kesiswaan', ['daftarKesiswaan'=>$users]);
    }
    public function tambahKesiswaanPage(){

    // $extra  = Extracurricular::all();
       return view('layouts.kesiswaan.tambah-kesiswaan');
    }
    public function tambahKesiswaan(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);
        $user->assignRole('Student Manager');
        $users = DB::table('users')
        ->join('model_has_roles', 'model_has_roles.model_id','=','users.id')
        ->join('roles','roles.id','=','model_has_roles.role_id')
        ->where('users.id','!=', 1)
        ->where('roles.name','=', 'Student Manager')
        ->select('users.*', 'roles.name as role_name')
        ->get();
        return view('layouts.kesiswaan.daftar-kesiswaan', ['daftarKesiswaan'=>$users]);
    }
}
