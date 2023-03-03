<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $ekstra = Magang::all();
        return view('welcome',['ekstra' => $ekstra]);
    }
}
