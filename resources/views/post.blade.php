@extends('layouts.main')

@section('container')
    <article>
        <h1 class="mb-5">{{ $post->title }}</h1>

        <p> By &copy; Muhammad Ardiansyah Hemrmawan in <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!} {{-- !! Escape Untuk Menambahkan kedalam Html tag  --}}


    </article>

    <a href="/blog" class="btn btn-danger">Back</a>
@endsection
