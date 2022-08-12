@extends('master')

@section('title','Sub Category Index')

@section('content')
<div class="col-md-8 m-auto">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Sub Cateogry Name</th>
            <th scope="col">Created </th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($subcategories as $subcategory)
            <tr>
                <th scope="row">{{$subcategory->id}}</th>
                <td>{{$subcategory->category->name}}</td>
                <td>{{$subcategory->name}}</td>
                <td>{{$subcategory->created_at->diffForHumans()}}</td>
                <td><a href="{{route('subcategory.edit',['subcategory' => $subcategory->id])}}">Edit</a></td>
            </tr>
            @endforeach


        </tbody>
    </table>
    <div class="col-md-6">
        <a class="btn bg-success text-white" href="{{route('subcategory.create')}}">Create Sub Category</a>
    </div>
</div>
@endsection
