@extends('master')

@section('title','Create Category')

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="category-name">Category Name</label>
                  <input name="category_name" type="text" class="form-control @error('category_name')
                      is-invalid
                  @enderror" id="category-name" placeholder="Enter Category Name">
                  @error('category_name')
                      <small class='text-danger'>{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="category_slug">Category Slug</label>
                  <input name="category_slug" type="text" class="form-control @error('category_slug')
                      is-invalid
                  @enderror" id="category_slug" placeholder="Enter Your Category Slug">
                  @error('category_slug')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-check mb-3">
                  <input name="is_active" type="checkbox" class="form-check-input" id="active">
                  <label class="form-check-label" for="active">Active</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection
