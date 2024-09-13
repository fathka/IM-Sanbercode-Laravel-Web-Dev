@extends('layouts.master')

@section('table')
    Halaman Tampil Buku
@endsection

@section('content')
<a href="/books/create" class="btn btn-sm btn-primary mb-5">Tambah Buku</a>
<div class="row">
    @forelse ($books as $value)
    <div class="col-4">
        <div class="card">
            <img src="{{asset('uploads/'. $value->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h2>{{$value->title}}</h5>
              <p class="card-text">{{$value->summary}}</p>
              <a href="/books/{{$value->id}}" class="btn btn-primary">Read More</a>
              <div class="row mt-2">
                <div class="col">
                    <a href="/books/{{$value->id}}/edit" class="btn btn-warning btn-block">Edit</a>
            </div>
            <div class="col">
                delete
          </div>
    @empty
          <h4>Buku belum tersedia</h4>
    @endforelse
@endsection