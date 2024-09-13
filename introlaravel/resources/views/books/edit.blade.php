@extends('layouts.master')

@section('table')
    Halaman Edit Buku
@endsection

@section('content')
<form action="/books/{{$books->id}}" method="POST" enctype="multipart/form-data">
    @method("Put")
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @csrf
    <div class="form-group">
      <label>Judul Buku</label>
      <input type="text" name="title" value="{{$books->title}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Summary</label>
        <input type="text" name="summary" value="{{$books->summary}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
      </div>
      <div class="form-group">
        <label>Stock</label>
        <input type="text" name="stock" value="{{$books->stock}}"class="form-control">
      </div>
      <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
            <option value="">--Pilih Category</option>
            @forelse ($categories as $value)
                @if ($value->id === $books->category_id)
                <option value="{{$value->id}}" selected>{{$value->name}}</option> 
                @else
                <option value="{{$value->id}}">{{$value->name}}</option>
                @endif
        
            @empty
                <option value="">Belum ada category</option>
            @endforelse
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection