@extends('layouts.homelayout')
@section('content')
    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <section class="col-md-12">
                <h1>{{ $post->title }}</h1>
                <h5 class="d-flex justify-content-between align-items-center">
                    <a href="{{ url('/categories') }}">{{ $post->category->name }}</a>
                    <span class="date-time">{{ $post->created_at }}</span>
                </h5>
                <article class="bg-article p-3"><img class="float-right mb-2 ml-2" style="width: 18rem;" src="{{ Storage::url("/app/public/{$post->image}") }}" alt="">{{ $post->body }}</article>
                    <!-- <section>post not found!</section> -->
            </section>
        </section>
    </section>
@endsection