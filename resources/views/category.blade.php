@extends('layouts.homelayout')
@section('content')
<section class="container my-5">
@foreach($categories as $category)
            <section class="row">
                <section class="col-12">
                    <h1>{{ $category->name }}</h1>
                    <hr>
                </section>
            </section>
            <section class="row">
            @foreach($category->posts as $post) 
                <section class="col-md-4">
                    <section class="mb-2 overflow-hidden" style="max-height: 15rem; border-radius:10px;"><img class="img-fluid" src="{{ Storage::url("/app/public/{$post->image}") }}" alt=""></section>
                    <h2 class="h5 text-truncate">{{ $post->title }}</h2>
                    <p>{{ substr($post->body,0,150).'...' }}</p>
                    <p><a class="btn btn-primary" href="" role="button">View details »</a></p>      
                </section> 
            @endforeach
            </section>
@endforeach
</section>
@endsection