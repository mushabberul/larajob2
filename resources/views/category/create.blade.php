@extends('master')

@section('title','Create Category')

@section('content')
    <div class="row">

        <div class="col-md-6 m-auto">
            @if (session('status'))
                <div class="bg-success p-1 text-white">
                    {{session('status')}}
                </div>
            @endif

            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="category-name">Category Name</label>
                  <input name="category_name"  value="{{old('category_name')}}" type="text" class="form-control @error('category_name')
                      is-invalid
                  @enderror" id="category-name" placeholder="Enter Category Name">
                  @error('category_name')
                      <small class='text-danger'>{{$message}}</small>
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
