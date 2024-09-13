@extends('layouts.master')

@section('title')
View Cast Member
@endsection
@section('content')
<h1 class="text-primary">{{$category->name}}</h1>
<a href="/category" class="btn btn-secondary btn">back</a>
@endsection
