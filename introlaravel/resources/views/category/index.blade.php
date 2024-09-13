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
            <td>
              <form action="/category/{{$value->id}}" method="POST">
                <a href="/category/{{$value->id}}" class="btn btn-info btn-sm">Detail</a>
                <a href="/category/{{$value->id}}/edit" class="btn btn-secondary">Edit</a>
                @csrf
                @method("Delete")
                
                <input type="submit" class="btn btn-danger" value="Delete">
              </form>
            </td>

        </tr>
        @empty
        <tr>
            <td>Tidak ada data</td>
        </tr>
        @endforelse
    </tbody>
  </table>
  @endsection