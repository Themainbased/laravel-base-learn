@extends('layouts.main')

@section('container')
    <article>
        <h1 class="mb-5">{{ $post->title }}</h1>
        {!! $post->body !!} {{-- !! Escape Untuk Menambahkan kedalam Html tag  --}}


    </article>

    <a href="/blog" class="btn btn-danger">Back</a>
@endsection
