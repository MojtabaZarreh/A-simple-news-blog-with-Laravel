@extends('layouts.layout')
@section('content')
                <section class="mb-2 d-flex justify-content-between align-items-center">
                    <h2 class="h4">Articles</h2>
                    <a href="{{ url('panel/posts/create') }}" class="btn btn-sm btn-success">Create</a>
                </section> 
                <section class="table-responsive">
                    <table class="table table-striped table-">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>image</th>
                            <th>title</th>
                            <th>Category</th>
                            <th>body</th>
                            <th>status</th>
                            <th>setting</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                                <td>{{ $post->id }}</td>
                                <td><img style="width: 70px; height: 70px;" src="{{ Storage::url("/app/public/{$post->image}") }}" alt="Image"></td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ substr($post->body,0,30) }}</td>
                                <td>
                                    @if($post->status == 10)
                                        <span class="text-success">enable</span> 
                                    @else
                                        <span class="text-danger">disable</span> 
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('changeStaus', $post->id) }}" class="btn btn-warning btn-sm">Change status</a>
                                    <a href="{{ route('postedit', $post->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ route('postdelete', $post->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
@endsection