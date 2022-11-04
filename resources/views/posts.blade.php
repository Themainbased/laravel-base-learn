@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <h2> <a href="/posts/{{ $post->id }}"> {{ $post->title }} </a></h2>
        <p>{{ $post->excerpt }}</p>
    @endforeach
@endsection
