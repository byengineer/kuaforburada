<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use URL;
use App\Kuafor;
use Illuminate\Support\Facades\Input;



class kuaforlerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    protected function index(){

        return view('kuaforler',['isimler'=>Kuafor::where('user_id','=',Auth::user()->id)->get()]);
    }

    protected function get(){

        return 'asd';

    }
    protected function isimEkle(Request $request){

        $validator = Validator::make($request->all(), [
            'isim' => 'required|max:255|min:3',
        ]);

        if ($validator->fails()) {
            return redirect('kuafor')
                ->withErrors($validator)
                ->withInput();
        }else{
            $kuafor = new Kuafor();
            $kuafor->user_id = Auth::user()->id;
            $kuafor->isim = Input::get('isim');

            if($kuafor->save()){
                return redirect('kuafor')->with('success','Kuaförünüz Başarıyla Eklendi.');
            }
            else  return redirect('kuafor')->withErrors('hata','Bilinmeyen bir hata oluştu.');

        }
    }
}
