<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RandevuAlController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function index($id=null){
        return view('randevuAl',['kuaforID'=>$id],['personeller'=>DB::table('kuafor_personel')->where('kuafor_id',$id)->get()]);
    }
}
