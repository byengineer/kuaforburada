<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuafor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class RandevuAraController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    protected function index($cid=null){
        return view('kuaforAra',['kuafor_listesi'=>Kuafor::where('sehir','=',$cid)->get(),'baslik'=>DB::table('cities')->where('id',$cid)->first()]);
    }

    protected function randevuListele(){

        $tarih = date("Ymd",strtotime(str_replace('/', '-', Input::get("tarih"))));
        $p_id = Input::get("personel_id");
        $sor = DB::table("randevular")->where("personel_id",$p_id)
            ->where("tarih",$tarih)->get();

        $sonuc="";
        if (count($sor)>0){
            foreach ($sor as $key => $list){
                $sonuc .="<button class='rnd-al-saat btn btn-danger'>$list->saat</button>";
                for ($i=9;$i<=18;$i++){
                    if ($key>0) break;
                    if ($i.":00"==$list->saat) continue;
                    $sonuc .="<button class='rnd-al-saat btn btn-success' data-id='$i:00' data-toggle='modal' data-target='#myModal'>$i:00</button>";

                }
            }

        }else{
            for ($i=9;$i<=18;$i++){
                $sonuc .="<button class='rnd-al-saat btn btn-success' data-id='$i:00' data-toggle='modal' data-target='#myModal'>$i:00</button>";

            }

        }

        return $sonuc;
    }

    protected function randevuAl(){
        $tarih = date("Ymd",strtotime(str_replace('/', '-', Input::get("tarih"))));
        $p_id = Input::get("personel_id");
        $k_id = Input::get("k_id");
        $saat = Input::get("saat");

        $sor = DB::table("randevular")->where("personel_id",$p_id)
            ->where("tarih",$tarih)
            ->where("saat",$saat)
            ->where("kuafor_id",$k_id)
            ->get();
        if (count($sor)>0){
            return "üzgünüz zaten kayıt var";
        }else{
            $ekle = DB::table('randevular')->insert([
                "kuafor_id" => $k_id,
                "personel_id" => $p_id,
                "tarih" => $tarih,
                "saat" => $saat,
                "durum" => 1
            ]);
            if (count($ekle)>0){
                return "Randevu başarıyla alındı";
            }else{
                return "hata randevu alınamadı!!!!";
            }
        }



    }




}
