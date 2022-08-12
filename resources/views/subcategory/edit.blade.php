@extends('master')

@section('title','Edit Sub Category')

@section('content')
        <div class="col-md-6 m-auto">
            <div class="col-md-6">
                <a class="btn bg-success text-white" href="{{route('subcategory.index')}}">Sub Category List</a>
            </div>
            @if (session('status'))
                <div class="bg-success text-white p-1 mb-2">
                    {{session('status')}}
                </div>
            @endif
            <form action="{{route('subcategory.update')}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <select name="category_id">
                      <option value=""  disabled>Select Category Name</option>
                    @foreach ($categories as $category )
                        <option @if ($category->id == $subcategories->category_id)
                            selected
                        @endif value="{{ $category->id}}">{{ $category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <div class="form-group">
                  <label for="sub-category-name">Sub Category Name</label>
                  <input value="{{$subcategories->name}}" name="sub_category_name"  value="{{old('category_name')}}" type="text" class="form-control" id="sub-category-name" placeholder="Enter Sub Category Name">
                  @error('sub_category_name')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>

                <div class="form-check mb-3">
                  <input name="is_active" type="checkbox" class="form-check-input" id="active" @if ($subcategories->is_active)
                      checked
                  @endif>
                  <label class="form-check-label" for="active">Active</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>

@endsection
