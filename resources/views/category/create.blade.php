@extends('master')

@section('title','Create Category')

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            <form>
                <div class="form-group">
                  <label for="category-name">Category Name</label>
                  <input type="text" class="form-control" id="category-name" placeholder="Enter Category Name">
                </div>
                <div class="form-group">
                  <label for="category_slug">Category Slug</label>
                  <input type="text" class="form-control" id="category_slug" placeholder="Enter Your Category Slug">
                </div>
                <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="active">
                  <label class="form-check-label" for="active">Active</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection
