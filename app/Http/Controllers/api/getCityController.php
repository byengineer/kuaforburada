<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class getCityController extends Controller
{
    public function index(){
        return response()->json(
            $city = DB::table('cities')->get()
        );
    }
}
