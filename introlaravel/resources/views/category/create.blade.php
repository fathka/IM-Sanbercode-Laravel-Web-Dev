@extends('layouts.master')

@section('table')
    Halaman Tambah Category
@endsection

@section('content')
<form action="/category" method="POST">
    @csrf
    <div class="form-group">
      <label>Nama category</label>
      <input type="text" name="name" class="form-control">
    </div>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection