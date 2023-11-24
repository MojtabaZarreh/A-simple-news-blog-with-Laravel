@extends('layouts.layout')

@section('content')
<section class="mb-2 d-flex justify-content-between align-items-center">
                    <h2 class="h4">Categories</h2>
                    <a href="{{ url('panel/category/create') }}" class="btn btn-sm btn-success">Create</a>
                </section>
                <section class="table-responsive">
                    <table class="table table-striped table-">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>setting</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="{{ route('edit', ['id'=>$category->id]) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ route('delete', $category->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
@endsection
