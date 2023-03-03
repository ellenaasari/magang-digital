<?php

namespace App\Http\Controllers;

use App\Models\DataMagang;
use App\Models\Magang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataMagangController extends Controller
{
    public function daftarEkstrakurikuler(Request $request){
        $user = Auth::user();
        $nisOfUser = $user->nis;
        $extra_id = $request->magang_id;
        // return $extra_id;
        DataMagang::create([
            'nis' => $nisOfUser,
            'magang_id' => $extra_id
        ]);
        return redirect('dashboard')->with('successMessage','Kamu berhasil melakukan pendaftaran Ekstrakurikuler');
    }

    public function pengajuanPage(){
        $user = Auth::user();
        $userRole = $user->getRoleNames()[0];
        if($userRole == "Admin"){
            $submissionExtra = DB::table('users')
                                ->join('data_magangs','data_magangs.nis' ,'=', 'users.nis')
                                ->join('magangs','magangs.id' ,'=', 'data_magangs.magang_id')
                                ->select('magangs.*','data_magangs.*','data_magangs.magang_id as data_extra_id','users.name as user_name')
                                ->orderByDesc('data_magangs.is_accepted')
                                ->get()->reverse()
                                ;
                                return view('layouts.pengajuan.pengajuan-ekstra',['submissionExtra'=>$submissionExtra]);

        }else{
            $extraLeader = DB::table('users')
            ->join('leaders','leaders.user_id' ,'=', 'users.id')
            ->join('magangs', 'magangs.id','=','leaders.magang_leader_id')
            ->where('leaders.user_id','=',$user->id)
            ->get()->first();
            $submissionExtra = DB::table('users')
            ->join('data_magangs','data_magangs.nis' ,'=', 'users.nis')
            ->join('magangs','magangs.id' ,'=', 'data_magangs.magang_id')
            ->select('magangs.*','data_magangs.*','data_magangs.magang_id as data_extra_id','users.name as user_name')
            ->where('magangs.name','=',$extraLeader->name)
            ->orderByDesc('data_magangs.is_accepted')
            ->get()->reverse()
            ;
            // return $submissionExtra;
            return view('layouts.pengajuan.pengajuan-ekstra',['submissionExtra'=>$submissionExtra]);

        }
    }

    public function konfirmasiPengajuan(Request $request){
        $dataExtra = DataMagang::where('magang_id','=',$request->id)
                        ->where('nis','=',$request->nis)
                        ->where('is_accepted', '=' , '0')
                        ;
        // $dataExtra->is_accepted = true;
        $dataExtra->update([
            'is_accepted' => true
        ]);
        return redirect()->back()->with('successMessage','Pengajuan ekstrakurikuler berhasil dikonfirmasi');

    }

    public function tolakPengajuan(Request $request){
        $dataExtra = DataMagang::where('magang_id','=',$request->id)
                        ->where('nis','=',$request->nis)
                        ->where('is_accepted', '=' , '0')
                        ;
        // $dataExtra->is_accepted = true;
        $dataExtra->update([
            'is_accepted' => 2
        ]);
        return redirect()->back()->with('errorMessage','Penolakan pengajuan ekstrakurikuler berhasil dikonfirmasi');
    }
    public function daftarPengajuanEkstra(){
        $user = Auth::user();
        $myMagdi = DB::table('users')
                            ->join('data_magangs','data_magangs.nis' ,'=', 'users.nis')
                            ->join('magangs','magangs.id' ,'=', 'data_magangs.magang_id')
                            ->where('data_magangs.nis','=',$user->nis)
                            ->select('magangs.*','data_magangs.*','data_magangs.magang_id as data_extra_id','users.name as user_name')
                            ->get()->reverse()
                            ;
        return view('layouts.pengajuan.daftar-pengajuan-ekstra', ['myMagdi' => $myMagdi]);
    }
    public function getFreeExtra(){
        $user = Auth::user();
        $myMagdi = DB::table('users')
                            ->join('data_magangs','data_magangs.nis' ,'=', 'users.nis')
                            ->join('magangs','magangs.id' ,'=', 'data_magangs.magang_id')
                            ->select('magangs.*')
                            ->where('data_magangs.is_accepted','=','1')
                            ->where('data_magangs.nis','=',$user->nis)
                            ->get()
                            ;
        return $myMagdi;
        // $getFreeExtra = magang::where();
    }

}
