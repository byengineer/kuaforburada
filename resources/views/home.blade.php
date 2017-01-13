@extends('layouts.app')

@section('content')

    <div class="row" style="background: #fff; margin:15px 0">
        <div class="col-md-8">


            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#profilim" data-toggle="tab">Resim</a></li>
                <li><a href="#orange" data-toggle="tab">Bilgiler</a></li>
                <li><a href="#yellow" data-toggle="tab">Yellow</a></li>
                <li><a href="#green" data-toggle="tab">Green</a></li>
                <li><a href="#blue" data-toggle="tab">Blue</a></li>
            </ul>
            <div id="my-tab-content" class="tab-content">
                <div class="tab-pane active" id="profilim">
                    <form action="profil/resimYukle" method="post" enctype="multipart/form-data">
                        <label for="">Profil Resmi Yükleyiniz</label>
                        <input type="file" name="profil_resim">
                        <button class="btn btn-green">yükle</button>
                        {{csrf_field()}}

                    </form>
                </div>
                <div class="tab-pane" id="orange">
                    <form action="profil/bilgiGuncelle" method="post">
                        {{csrf_field()}}
                        <div style="margin-top:20px "></div>
                        <div class="form-group">
                            <label for="">Ad soyad</label>
                            <input class="form-control" type="text" name="adsoyad">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Doğum Tarihi</label>
                            <input class="form-control" type="date" name="dogumtarihi">
                        </div>
                        <div class="form-group">
                            <label for="">Şifre</label>
                            <input class="form-control" type="password" name="password">
                            <div  class="form-description">Değiştirmeyecekseniz boş kalsın</div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-green">Güncelle</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="yellow">
                    <h1>Yellow</h1>
                    <p>yellow yellow yellow yellow yellow</p>
                </div>
                <div class="tab-pane" id="green">
                    <h1>Green</h1>
                    <p>green green green green green</p>
                </div>
                <div class="tab-pane" id="blue">
                    <h1>Blue</h1>
                    <p>blue blue blue blue blue</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            Sol alan
        </div>
    </div>



@endsection
