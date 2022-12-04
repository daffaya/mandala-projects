@extends('layouts.main')

@section('container')
    <h1><center> Halaman About </center></h1>
    <h1>{{ $title }}</h1>
    <p>{{ $content }}</p>
    <img src="img/{{ $images }}" alt="{{ $title }}" width="200px">
@endsection