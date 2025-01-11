@extends('admin.layouts.layout')
@section('admin_page_title')
Settings - Admin Panel
@endsection
@section('admin_layout')
        <div class="row">
                <div class="col-12">
                        <div class="card">
                                <div class="card-header">
                                        <h5 class="card-title mb-0">Settings</h5>
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

                                        <form action="{{route('admin.homepage.update')}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <label for="discounted_product_id" class="fw-bold mb-2">Select Discounted Product</label>
                                                <select name="discounted_product_id" id="discounted_product_id" class="form-control">
                                                @foreach ($products as $product)
                                                        <option value="{{ $product->id }}" {{$homepagesetting   ->discounted_product_id == $product->id? 'selected':''}}>{{ $product->product_name }}</option>
                                                @endforeach
                                                </select>

                                                <label for="discounted_percent" class="fw-bold mb-2">Discount Percent</label>
                                                <input type="number" value="{{$homepagesetting->discounted_percent}}" class="form-control" name="discounted_percent">
                                                
                                                <label for="discounted_heading" class="fw-bold mb-2">Discount Heading</label>
                                                <input type="text" value="{{$homepagesetting->discounted_heading}}" class="form-control" name="discounted_heading">

                                                <label for="discounted_subheading" class="fw-bold mb-2">Discount Text</label>
                                                <input type="text" value="{{$homepagesetting->discounted_subheading}}" class="form-control" name="discounted_subheading">

                                                <label for="featured_product_1_id" class="fw-bold mb-2">Select Featured Product 1</label>
                                                <select name="featured_product_1_id" id="featured_product_1_id" class="form-control">
                                                @foreach ($products as $product)
                                                        <option value="{{ $product->id }}" {{$homepagesetting   ->featured_product_1_id == $product->id? 'selected':''}}>{{ $product->product_name }}</option>
                                                @endforeach
                                                </select>

                                                <label for="featured_product_2_id" class="fw-bold mb-2">Select Featured Product 2</label>
                                                <select name="featured_product_2_id" id="featured_product_2_id" class="form-control">
                                                @foreach ($products as $product)
                                                        <option value="{{ $product->id }}" {{$homepagesetting   ->featured_product_2_id == $product->id? 'selected':''}}>{{ $product->product_name }}</option>
                                                @endforeach
                                                </select>

                                                <button type="submit" class="btn btn-primary w-100 mt-2">Add Discount</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
@endsection