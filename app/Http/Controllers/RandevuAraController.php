<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuafor;
use Illuminate\Support\Facades\DB;

class RandevuAraController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    protected function index($cid=null){
        return view('kuaforAra',['kuafor_listesi'=>Kuafor::where('sehir','=',$cid)->get(),'baslik'=>DB::table('cities')->where('id',$cid)->first()]);
    }



}
