@extends('layouts.master')

@section('table')
    Halaman Edit Category
@endsection

@section('content')
<form action="/category/{{$category->id}}" method="POST">
    @method("put")
    @csrf
    <div class="form-group">
      <label>Nama category</label>
      <input type="text" name="name" class="form-control" value="{{$category->name}}">
    </div>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection