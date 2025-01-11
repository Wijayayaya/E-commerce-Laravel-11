@extends('admin.layouts.layout')
@section('admin_page_title')
Create Sub Category - Admin Panel
@endsection
@section('admin_layout')
        <div class="row">
                <div class="col-12">
                        <div class="card">
                                <div class="card-header">
                                        <h5 class="card-title mb-0">Create Sub Category</h5>
                                </div>
                                <div class="card-body">
                                @if ($errors->any())
                                        <div class="alert alert-warning alert-dismissible fade show">
                                                <ul>
                                                @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                @endforeach
                                                </ul>
                                        </div>
                                @endif
                                @if (Session::has('success'))
                                        <div class="alert alert-success alert-dismissible fade show">
                                                {{ Session::get('success') }}
                                        </div>
                                @endif

                                        <form action="{{route('store.subcategory')}}" method="POST">
                                                @csrf
                                                <label for="subcategory_name" class="fw-bold mb-2">Give Name of Your Sub Category</label>
                                                <input type="text" class="form-control" name="subcategory_name" placeholder="Enter Sub Category Name">
                                               
                                                <label for="category_id" class="fw-bold mb-2">Select Category</label>
                                                <select name="category_id" class="form-control" id="category_id">
                                                        @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                        @endforeach
                                                </select>
                                                <button type="submit" class="btn btn-primary w-100 mt-2">Add Sub Category</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
@endsection