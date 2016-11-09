@extends('layouts.app')
@section('title')
    Randevu Al
@endsection
@section('content')


    <!-- listele -->
    <div class="row">
        <div class="col-lg-3 col-sm-6 videoitem">
            <div class="ozelcaption text-center randevu-listele">
                <img src="images/kuafor-logo.png" alt="">
                <div>Kuafor Adı Burada</div>
                <span class="yorum">44 Yorum</span>
                <span class="yildiz"><i class="fa fa-star"></i></span>
                <span class="yildiz"><i class="fa fa-star"></i></span>
                <span class="yildiz"><i class="fa fa-star"></i></span>
            </div>
        </div>

        <div class="col-lg-9 col-sm-6 videoitem">

            <div class="ozelcaption">
                <form action="" onsubmit="return false">
                   <div class="row">
                       <div class="col-md-6">
                           <h3>Önce Tarih Seçiniz:</h3>
                           <div class="input-group date datepicker"  data-provide="datepicker">
                               <input type="text" name="tarih" class="form-control">
                               <div class="input-group-addon">
                                   <span class="fa fa-calendar"></span>
                               </div>
                           </div>
                       </div>
                   </div>
                @foreach($personeller as $personel)

                        <div class="row randevu-listele" style="border:0">
                            <div class="col-md-1">
                                <img class="img-responsive" style="width: 75px" src="http://wwwuser.gwdg.de/~uatz/bilder/personen/yakgun.jpg" alt="">
                            </div>
                            <div class="col-md-3">
                                {{$personel->isim}}
                                <input type="hidden" name="personel_id" value="{{$personel->kuafor_id}}">
                                <button class="btn btn-warning btn-block btn-xs" id="personel_sec_buton" data-id="{{$personel->kuafor_id}}">Seç</button>
                            </div>
                        </div>


                @endforeach
                </form>


                <div class="row randevu-listele" style="border:0">
                    <div class="col-md-6">
                        <button class="btn btn-success" style="margin-bottom: 5px">10:00</button>
                        <button class="btn btn-success" style="margin-bottom: 5px">11:00</button>
                        <button class="btn btn-success" style="margin-bottom: 5px">12:00</button>
                        <button class="btn btn-success" style="margin-bottom: 5px">12:00</button>
                        <button class="btn btn-success" style="margin-bottom: 5px">12:00</button>
                        <button class="btn btn-success" style="margin-bottom: 5px">12:00</button>
                        <button class="btn btn-danger   " style="margin-bottom: 5px">12:00</button>
                        <button class="btn btn-success" style="margin-bottom: 5px">12:00</button>
                        <button class="btn btn-success" style="margin-bottom: 5px">12:00</button>

                    </div>
                    <div class="col-md-3">  <button class="btn btn-green btn-block" style="height: 46px">Randevuyu Al</button></div>
                </div>






            </div>

        </div>


    </div>
    <!-- listele bitiş -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.tr.min.js"></script>
    <script src="js/randevu-al.js"></script>
    <script>
         $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            language: 'tr',
            startDate: new Date(),
             autoclose: true
         });
         var d = new Date();

         $('.datepicker').datepicker('update', d);

    </script>
@endsection

