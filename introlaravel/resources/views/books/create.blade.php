@extends('layouts.master')

@section('table')
    Halaman Tambah Buku
@endsection

@section('content')
<form action="/books" method="POST" enctype="multipart/form-data">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @csrf
    <div class="form-group">
      <label>Judul Buku</label>
      <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label>Summary</label>
        <input type="text" name="summary" class="form-control">
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
      </div>
      <div class="form-group">
        <label>Stock</label>
        <input type="text" name="stock" class="form-control">
      </div>
      <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
            <option value="">--Pilih Category</option>
            @forelse ($categories as $value)
                <option value="{{$value->id}}">{{$value->name}}</option>
            @empty
                <option value="">Belum ada category</option>
            @endforelse
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection