<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use App\Models\Grade;
use App\Models\StudyProgram;
use App\Models\User;
use Faker\Extension\CountryExtension;
use \PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function pengajuanPendaftar()
    {
        $users = DB::table('users')
                    ->join('model_has_roles','model_has_roles.model_id','=','users.id')
                    ->join('roles','roles.id','=','model_has_roles.role_id')
                    ->where('users.id','!=','1')
                    ->where('roles.name','=','Student')
                    ->orWhere('roles.name','=','Process')
                    ->orWhere('roles.name','=','Reject')
                    ->select('users.*','roles.name as role_name')
                    ->orderByDesc('roles.name')
                    ->get()
                    ->reverse();

        return view('layouts.pengajuan.pengajuan-pendaftar', ['dataPendaftar' => $users]);
    }

    public function tolakPendaftar(Request $request){
        $user = User::find($request->id);

        $userRole = $user->getRoleNames();
        if(count($userRole) > 0){

        foreach($userRole as $uRole){

            $user->removeRole($uRole);
        }
        }
        $user->assignRole('Reject');

        return redirect()->back()->with('rejectMessage','Penolakan Pendaftar Berhasil dilakukan');
    }

    public function konfirmasiPendaftar(Request $request)
    {
        $user = User::find($request->id);
        $userRole = $user->getRoleNames();
        if(count($userRole) > 0){

        foreach($userRole as $uRole){

            $user->removeRole($uRole);
        }
        }
        $user->assignRole('Student');

        return redirect()->back()->with('successMessage','Pengajuan Pendaftar Berhasil di Konfirmasi');
    }

    public function index()
    {
        $user = Auth::user();
        $userRole = $user->getRoleNames()[0];
        if($userRole == "Teacher"){
            $extraLeader = DB::table('users')
            ->join('leaders','leaders.id' ,'=', 'users.id')
                    ->join('magangs', 'magangs.id','=','leaders.magang_leader_id')
                    ->where('leaders.user_id','=',$user->id)
                    ->get()->first()->name;
                    $users = DB::table('users')
                    ->join('data_magangs','data_magangs.nis' ,'=', 'users.nis')
                    ->join('magangs','magangs.id' ,'=', 'data_magangs.magang_id')
                    ->select('magangs.*','data_magangs.*','data_magangs.magang_id as data_extra_id','users.name as user_name','users.email as email')
                    ->where('magangs.name','=',$extraLeader)
                    ->where('data_magangs.is_accepted','=', 1)
                    ->where('users.id','!=', 1)
                    ->orderByDesc('data_magangs.is_accepted')
                    ->get()->reverse();
                    return view('layouts.pengajuan.daftar-peserta', ['daftarPeserta'=>$users]);
                    
                }else if($userRole == "Admin"){
                    $users = DB::table('users')
                                ->join('model_has_roles', 'model_has_roles.model_id','=','users.id')
                                ->join('roles','roles.id','=','model_has_roles.role_id')
                                ->select('users.*','users.name as user_name', 'roles.name as role_name')
                                ->where('users.id','!=', 1)
                                ->where('roles.name','=', 'Student')
                                ->whereNotNull('users.nis')
                                ->get();
                    return view('layouts.pengajuan.daftar-peserta', ['daftarPeserta'=>$users]);

                }else if($userRole == "Student Manager"){
                    $studyprogram = StudyProgram::all();
                    $users = DB::table('users')
                                ->join('model_has_roles', 'model_has_roles.model_id','=','users.id')
                                ->join('roles','roles.id','=','model_has_roles.role_id')
                                ->select('users.*','users.name as user_name', 'roles.name as role_name')
                                ->whereNotNull('nis')
                                ->where('users.id','!=', 1)
                                ->get();
                                return view('layouts.pengajuan.daftar-peserta', ['daftarPeserta'=>$users,'studyprogram'=>$studyprogram]);
                            }
                        }

    public function cetakPdf($grade, $sp){
        $temp = collect();
        $dataCollation = collect();
        $daftarPeserta = DB::table('users')
        ->where('users.grade','=',$grade)
        ->where('users.study_program','=',$sp)
        ->select('users.*')
        ->get();
        
        foreach($daftarPeserta as $peserta){
                $daftarMagang= DB::table('users')
                    ->join('model_has_roles', 'model_has_roles.model_id','=','users.id')
                    ->join('roles','roles.id','=','model_has_roles.role_id')
                    ->join('data_magangs','data_magangs.nis' ,'=', 'users.nis')
                    ->join('magangs','magangs.id' ,'=', 'data_magangs.magang_id')
                    ->select('magangs.name')
                    ->where('data_magangs.is_accepted','=', 1)
                    ->where('users.id','!=', 1)
                    ->where('users.study_program','=',$sp)
                    ->where('users.name','=',$peserta->name )
                    ->where('users.grade','=',$grade)
                    ->get();
                    $dataCollation->push([$peserta,$daftarEkstra]);
                }

        $pdf = PDF::loadView('cetak.cetak-pdf', ['grade'=>$grade,'sp'=>$sp,'datapeserta'=>$dataCollation]);
        return $pdf->stream('report.pdf');
    }

    public function daftarPesertaByName($name, $gradeParam){
        $dataCollation = collect();
        $data = collect();
        $studyprogram = StudyProgram::all();
        $grades = Grade::all();
            $daftarPeserta = DB::table('users')
                ->where('users.grade','=',$gradeParam)
                ->where('users.study_program','=',$name)
                ->select('users.*')
                ->get();
        foreach($daftarPeserta as $peserta){
            $daftarMagang= DB::table('users')
                ->join('model_has_roles', 'model_has_roles.model_id','=','users.id')
                ->join('roles','roles.id','=','model_has_roles.role_id')
                ->join('data_magangs','data_magangs.nis' ,'=', 'users.nis')
                ->join('magangs','magangs.id' ,'=', 'data_magangs.magang_id')
                ->select('magangs.name')
                ->where('data_magangs.is_accepted','=', 1)
                ->where('users.id','!=', 1)
                ->where('users.study_program','=',$name)
                ->where('users.name','=',$peserta->name)
                ->get();
                $data->push([$peserta,$daftarEkstra]);
            }

            $dataCollation->push($data);
            $data= collect();

        return view('layouts.pengajuan.daftar-peserta', ['daftarPeserta'=>$dataCollation,'studyprogram' => $studyprogram, 'name' => $name,'gradeParam' => $gradeParam,'grades' => $grades]);

    }

    public function melengkapiData(){

        $user = Auth::user();
        $sp = StudyProgram::all();
        $grade = Grade::all();
            return view('layouts.profile.melengkapi-data', ['user' => $user,'grade' => $grade,'sp'=>$sp]);

    }

    public function ubahIdentitas(Request $request,$id){
        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->nis = $request->nis;
        $user->phone = $request->phone;
        $user->grade = $request->grade;
        $user->study_program = $request->study_program;
        $user->date_birth = $request->date_birth;
        $user->place_birth = $request->place_birth;
        $user->gender = $request->gender;
        $user->address = $request->address;

        $user->save();

        return redirect('pendaftaran-ekstrakurikuler');
    }

    public function getProfile(){
        $user = Auth::user();
        return view('layouts.profile.my-profile',['user' => $user]);
    }

}
