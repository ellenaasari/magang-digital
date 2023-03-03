<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;

class MagangController extends Controller
{

    public function index()
    {

           $daftarEkstra = Magang::get();
           return view('layouts.ekstrakurikuler.daftar-ekstra', ['dataEkstra' => $daftarEkstra]);

    }

    public function pendaftaranPage(){
        $user = Auth::user();
        $myMagdi = DB::table('users')
                            ->join('data_magangs','data_magangs.nis' ,'=', 'users.nis')
                            ->join('magangs','magangs.id' ,'=', 'data_magangs.magang_id')
                            ->select('magangs.*')
                            ->where('data_magangs.nis','=',$user->nis)
                            ->get();
                   
        $dayUsed = collect();

        $freeExtra =  DB::table('magangs');

        if(count($myMagdi) > 0){
            foreach($myMagdi as $extra){
                $dayUsed->push($extra->day_operation);
            }
            foreach($myMagdi as $extra){
                $freeExtra->where('id', '!=' ,$extra->id);
            }
        }
        $user = Auth::user();
        $ekstra = $freeExtra->get();
        if(is_null($user->nis)){
            return redirect('melengkapi-data');
        }
        return view('layouts.ekstrakurikuler.pendaftaran-ekstra', ['user' => $user, 'daftarEkstra'=>$ekstra]);
    }

    public function managePage(){
        $daftarEkstra = Extracurricular::get();
        return view('layouts.ekstrakurikuler.kelola-ekstra', ['dataEkstra'=>$daftarEkstra]);
    }

    public function store(Request $request)
    {
        // return $request->all();
        $extraSplitName = explode(" ",$request->name);

        $name = $request->file('image')->getClientOriginalExtension();
        $imgName = $extraSplitName[0].".".$name;
        $path = $request->file('image')->move(public_path('assets/extra-img/'), $imgName);
        $imgPath = "assets/extra-img/".$imgName;
        Extracurricular::create([
            "name"=>$request->name,
            "day_operation"=>$request->day_operation,
            "time_operation"=>$request->time_operation,
            "description"=>$request->description,
            "photo_path"=>$imgPath,
        ]);
        return redirect()->back();
    }

    public function storePage()
    {
        return view('layouts.ekstrakurikuler.tambah-ekstra');
    }


    public function editPage($id)
    {
        $extraId = Extracurricular::findOrFail($id);
        return view('layouts.ekstrakurikuler.ubah-ekstra', ['extraId' => $extraId]);
    }
    public function edit(Request $request, $id)
    {
        $extraId = Extracurricular::findOrFail($id);
        $extraId->update([
            'name' => $request->name,
            'day_operation' => $request->day_operation,
            'time_operation' => $request->time_operation,
            'description' => $request->description,
        ]);
        return redirect('kelola-ekstra');
    }

    public function destroy($id)
    {
        $extra = Extracurricular::findOrFail($id);
        $extra->delete();
        return redirect()->back();
    }
}
