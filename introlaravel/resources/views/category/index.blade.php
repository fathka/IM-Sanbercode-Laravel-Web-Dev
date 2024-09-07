@extends('layouts.master')

@section('table')
    Halaman List Category
@endsection

@section('content')
<a href="/category/create" class="btn btn-primary btn-sm">Tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($category as $key => $value)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$value->name}}</td>
            <td><a href="/category/{{$value->id}}" class="btn btn-info btn-sm">Detail</a></td>
        </tr>
        @empty
        <tr>
            <td>Tidak ada data</td>
        </tr>
        @endforelse
    </tbody>
  </table>
  @endsection