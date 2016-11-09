@extends('layouts.app')
@section('title')
    Kuaförler Sayfası
@endsection
@section('content')
@foreach($errors->all() as $error)
    <div class="alert alert-danger">{{ $error }}</div>
    @endforeach

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <form action="{{ URL::to('kuafor') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Kuaför İsmi</label>
            <input type="text" name="isim" class="form-control" id="" placeholder="Kuaför İsmi">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>


    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>USER ID</th>
            <th>İSİM</th>
            <th>TARİH</th>
        </tr>
        </thead>
        <tbody>
        @foreach($isimler as $isim)
        <tr>
            <td>{{ $isim->id }}</td>
            <td>{{ $isim->user_id }}</td>
            <td>{{ $isim->isim }}</td>
            <td>{{ $isim->created_at }}</td>
        </tr>
        @endforeach

        </tbody>
    </table>


@endsection