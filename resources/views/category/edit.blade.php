@extends('master')

@section('title','Category Edit Page')
@section('content')
    <div class="col-md-8">
        <form action="{{route('category.update',['category' => $category->id])}}" method="POST">
            @method('PUT')
            @csrf



            <div class="form-group">
              <label for="category-name">Category Name</label>
              <input  value="{{$category->name}}" type="text" name="category_name" class="form-control" id="category-name">

            </div>

            <div class="form-check">
              <input @if ($category->is_active)
                  checked
              @endif type="checkbox" name="is_active" class="form-check-input" id="is-active">
              <label class="form-check-label" for="is-active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

@endsection
