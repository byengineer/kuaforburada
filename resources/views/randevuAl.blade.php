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

            <div class="ozelcaption" id="contentLoad">

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
                                <input type="hidden" name="kuafor_id" value="{{$kuaforID}}">
                                <input type="hidden" name="personel_id" value="{{$personel->kuafor_id}}">
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                <div class="radio radio-primary">
                                    <input type="radio" name="kuafor" id="radio12" value="option2">
                                    <label for="radio12">{{$personel->isim}}</label>
                                </div>
                            </div>
                        </div>


                @endforeach
                <div class="row">
                    <div class="col-md-6">
                        <button id="randeveAraButon" class="btn btn-green btn-block">Ara</button>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>


                <div class="row " style="border:0; margin-top: 20px">
                    <div class="randevu-liste-sonuc col-md-6">


                    </div>
                    <div class="col-md-3">  <button class="btn btn-green btn-block" style="height: 46px">Randevuyu Al</button></div>
                </div>






            </div>

        </div>


    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Randevu Al</h4>
                </div>
                <div class="modal-body">
                    <button id="secilenRandevuKaydet" class="btn btn-block btn-green">Kaydet</button>
                    <div id="randevuSonuc"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
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

