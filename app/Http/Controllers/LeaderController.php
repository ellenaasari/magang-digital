<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use App\Models\Leader;
use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class LeaderController extends Controller
{


    public function index(){
        $users = DB::table('users')
                    ->join('model_has_roles', 'model_has_roles.model_id','=','users.id')
                    ->join('roles','roles.id','=','model_has_roles.role_id')
                    ->join('leaders','leaders.user_id','=','users.id')
                    ->join('magangs','magangs.id','=','leaders.magang_leader_id')
                    ->where('users.id','!=', 1)
                    ->where('roles.name','=', 'Teacher')
                    ->select('users.*','magangs.name as magang_leader_for', 'roles.name as role_name')
                    ->get();
        // return $users;
                    return view('layouts.pembina.daftar-pembina', ['daftarPembina'=>$users]);
    }
    public function tambahPembinaPage(){

    $extra  = Magang::all();
       return view('layouts.pembina.tambah-pembina',['extra' => $extra]);
    }
    public function tambahPembina(Request $request){
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
        $user->assignRole('magang Leader');
        $userId = $user->id;
        $extraId = $request->magang_id;
        Leader::create([
            'user_id' => $userId,
            'magang_leader_id' => $extraId,
        ]);
        $users = DB::table('users')
        ->join('model_has_roles', 'model_has_roles.model_id','=','users.id')
        ->join('roles','roles.id','=','model_has_roles.role_id')
        ->join('leaders','leaders.user_id','=','users.id')
        ->join('magangs','magangs.id','=','leaders.magang_leader_id')
        ->where('users.id','!=', 1)
        ->where('roles.name','=', 'magang Leader')
        ->select('users.*','magangs.name as magang_leader_for', 'roles.name as role_name')
        ->get();
       return view('layouts.pembina.daftar-pembina',['daftarPembina'=> $users]);
    }
}
