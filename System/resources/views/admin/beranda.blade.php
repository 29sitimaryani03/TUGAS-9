@extends('template/base')

@section('content')
<h1>Selamat Datang {{auth()->user()->nama}}</h1>
@endsection