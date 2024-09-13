@extends('layouts.master')

@section('table')
    Halaman Tampil Buku
@endsection

@section('content')
<img src="{{asset('/uploads/' . $books->image)}}" class="img-fluid" alt="...">
<h1 class="text-primary">{{$books->title}}</h1>
<p>{{$books->summary}}</p>
@endsection