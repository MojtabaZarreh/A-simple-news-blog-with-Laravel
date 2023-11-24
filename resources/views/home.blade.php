@extends('layouts.homelayout')
@section('content')
    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            @foreach($posts as $post)
                <section class="col-md-4">
                    <section class="mb-2 overflow-hidden" style="max-height: 15rem; border-radius:10px;"><img class="img-fluid" src="{{ Storage::url("/app/public/{$post->image}") }}" alt=""></section>
                    <h2 class="h5 text-truncate">{{ $post->title }}</h2>
                    <p>{{ substr($post->body,0,150).'...' }}</p>
                    <p><a class="btn btn-primary" href="{{ route('showdetail', $post->id) }}" role="button">View details »</a></p>      
                </section>
            @endforeach      
        </section>
</section>
@endsection
