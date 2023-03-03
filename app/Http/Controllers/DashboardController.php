<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use App\Models\Grade;
use App\Models\StudyProgram;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $userRole = Auth::user()->getRoleNames()[0];
        if($userRole == "Admin"){

            $data = Magang::all();
            $users = User::where('id','!=', 1)->whereNotNull('nis')->get();
            return view('dashboard', [
                'dataEkstra'=>$data,
                'users' => $users
            ]);
        }else if($userRole == "Student"){
            /*
                SELECT users.name, extracurriculars.name FROM users
                INNER JOIN data_extracurriculars ON data_extracurriculars.nis = users.nis
                INNER JOIN extracurriculars ON extracurriculars.id = data_extracurriculars.extracurricular_id
            */
            $user = Auth::user();
            $myMagdi = DB::table('users')
                            ->join('data_magangs','data_magangs.nis' ,'=', 'users.nis')
                            ->join('magangs','magangs.id' ,'=', 'data_magangs.magang_id')
                            ->select('magangs.*')
                            ->where('data_magangs.is_accepted','=','1')
                            ->where('data_magangs.nis','=',$user->nis)
                            ->get()
                            ;
                            // return $myMagdi;
            return view('dashboard', [
                'user' => $user,
                'myMagdi' => $myMagdi
            ]);
        }else if($userRole == "Teacher"){
            $user = Auth::user();
            $teacher = DB::table('users')
            ->join('leaders','leaders.user_id' ,'=', 'users.id')
            ->join('magangs', 'magangs.id','=','leaders.magang_leader_id')
            ->where('users.id','=',$user->id)
            ->select('magangs.name')
            ->first();
            $submissionExtra = DB::table('users')
            ->join('data_magangs','data_magangs.nis' ,'=', 'users.nis')
            ->join('magangs','magangs.id' ,'=', 'data_magangs.magang_id')
            ->where('magangs.name','=',$teacher->name)
            ->where('data_magangs.is_accepted','=',1)
            ->select('magangs.*','users.name as user_name')
            ->get()
            ;
            $user = Auth::user();
            return view('dashboard', [
                'user' => $user,
                'submissionExtra' => $submissionExtra
            ]);
        }else if($userRole == "Student Manager"){
            $data = Extracurricular::all();
            $studyprogram = StudyProgram::all();
            $users = User::where('id','!=', 1)->whereNotNull('nis')->get();
            return view('dashboard', [
                'dataEkstra'=>$data,
                'studyprogram'=>$studyprogram,
                'users' => $users,
                'grades' => Grade::all()
            ]);
        }

    }
    public function getGender(){
        $laki = User::where('id','!=', 1)->where('gender','=','l')->whereNotNull('nis')->get();
        $perempuan = User::where('id','!=', 1,)->where('gender','=','p')->whereNotNull('nis')->get();
        return response()->json([$laki, $perempuan]);
    }

}
