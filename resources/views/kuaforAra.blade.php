@extends('layouts.app')
@section('title')
    {{ $baslik->baslik }} için randevu aranaıyor...
@endsection
@section('content')


    <div class="ozelcaption">
        <div class="row">
            <form action="" id="randevu_ara_form" method="get">
            <div class="col-md-3">
                <input type="text" id="randevu_sehir" class="form-control">
            </div>

            <div class="col-md-2">
                <button id="randevu_ara_btn" class="btn btn-ping btn-block">Ara</button>
            </div>
            </form>

        </div>
    </div>


    <!-- listele -->
    <div class="row">
        <div class="col-lg-9 col-sm-6 videoitem">
            <div class="ozelcaption">
                @foreach($kuafor_listesi as $list)
                    <!--listele satır -->
                        <div class="row randevu-listele">
                            <div class="col-md-3">
                                <img src="images/kuafor-logo.png" alt="">
                            </div>
                            <div class="col-md-6">
                                {{$list->isim}}
                                <span class="yorum">44 Yorum</span>
                                <span class="yildiz"><i class="fa fa-star"></i></span>
                                <span class="yildiz"><i class="fa fa-star"></i></span>
                                <span class="yildiz"><i class="fa fa-star"></i></span>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-green" href="randevu-al/{{$list->id}}">Randevu Al</a>
                            </div>
                        </div>
                        <!--listele satır bitiş-->
                @endforeach

            </div>

        </div>
        <div class="col-lg-3 col-sm-6 videoitem">
            <div class="ozelcaption">
                Reklam
            </div>

        </div>
        <!-- listele bitiş -->
    </div>

    <script>
        var options = {

            url: "{{URL::to('/')}}/api/getCity",

            getValue: "baslik",

            list: {
                match: {
                    enabled: true
                },
                onClickEvent: function() {

                },
                onKeyEnterEvent:function () {
                    var value = $("#randevu_sehir").getSelectedItemData().id;
                    if(value<9) value="0"+value;
                    window.location.href = 'randevu-ara/'+value;

                }
            },

            theme: "square"
        };
        $("#randevu_sehir").easyAutocomplete(options);
    </script>
@endsection

