@extends('layouts.main')


@section('container')
<article class = "mb-5">
    @foreach ($contents as $content)
        <h2> {{ $content["title"] }}</h2>
        <h5> {{ $content["client"] }}</h5>
        <p> {{ $content["location"] }}</p>
    @endforeach
</article>
@endsection