@extends('layouts.app')

@section('content')

    <div class="row" style="background: #fff; margin:15px 0">
        <div class="col-md-8">


            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#profilim" data-toggle="tab">Profilim</a></li>
                <li><a href="#orange" data-toggle="tab">Orange</a></li>
                <li><a href="#yellow" data-toggle="tab">Yellow</a></li>
                <li><a href="#green" data-toggle="tab">Green</a></li>
                <li><a href="#blue" data-toggle="tab">Blue</a></li>
            </ul>
            <div id="my-tab-content" class="tab-content">
                <div class="tab-pane active" id="profilim">
                    <form action="">
                        <label for="">Ad/Soyad</label><input type="text" class="form-control">
                        <label for="">Cep no</label><input type="text" class="form-control">

                    </form>
                </div>
                <div class="tab-pane" id="orange">
                    <h1>Orange</h1>
                    <p>orange orange orange orange orange</p>
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
