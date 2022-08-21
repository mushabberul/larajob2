@extends('master')

@section('title','Category List')

@section('content')
    <div class="col-md-8">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Subcat Number</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category )
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->subcategories_count}}</td>
                    <td>{{$category->created_at->diffForHumans()}}</td>
                    <td><a class="btn btn-info" href="{{route('category.edit',['category' => $category->id])}}">Edit</a></td>
                    <td>
                        {{-- <a class="btn btn-danger" href="{{route('category.destroy',['category' => $category->id])}}">Delete</a> --}}
                        <form action="{{route('category.destroy',['category' => $category->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
          <a href="{{route('category.create')}}" class="btn btn-success">Create Category</a>
    </div>
@endsection
