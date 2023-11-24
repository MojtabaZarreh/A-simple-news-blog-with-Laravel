@extends('layouts.layout')
@section('content')
                <form action="{{ route('update', $category->id) }}" method="POST">
                {{ csrf_field() }}
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name ..." 
                        value="{{ $category->name }}">
                    </section>
                    <section class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </section>
                </form>

            </section>
        </section>
    </section>
</section>
@endsection