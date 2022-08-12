@extends('master')

@section('title','Show Single Sub Category')

@section('content')
<div class="col-md-6">
    <h1>{{$subcategory->name}}</h1>
    <p>{{$subcategory->category->name}}</p>
    <p>{{$subcategory->created_at->format('d-m-y D h:m:s A')}}</p>
</div>
@endsection
