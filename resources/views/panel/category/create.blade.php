@extends('layouts.layout')

@section('content')
        <section class="container-fluid">
            <section class="row">
                <section class="col-md-2 p-0">
                </section>
                <section class="col-md-10 pt-3">
                    <form action="{{ url('panel/category/store') }}" method="POST">
                    {{ csrf_field() }}
                        <section class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="name ...">
                        </section>
                        <section class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </section>
                    </form>
                </section>
            </section>
        </section>
    </section>
@endsection
