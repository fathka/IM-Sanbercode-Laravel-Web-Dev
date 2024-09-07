@extends('layouts.master')

@section('title')
View Cast Member
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" value="{{ $category->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Age:</label>
                            <input type="number" class="form-control" value="{{ $category->umur }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Bio:</label>
                            <textarea class="form-control" readonly>{{ $category->bio }}</textarea>
                        </div>
                        <a href="{{ route('category.index') }}" class="btn btn-default">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
