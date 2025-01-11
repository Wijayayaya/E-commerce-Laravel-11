@extends('seller.layouts.layout')
@section('seller_page_title')
        Edit Store
@endsection
@section('seller_layout')
        Edit Store
        <div class="row">
                <div class="col-12">
                        <div class="card">
                                <div class="card-header">
                                        <h5 class="card-title mb-0">Edit Store</h5>
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

                                        <form action="{{route('update.store', $stores_info->id)}}" method="POST"> 
                                                @csrf
                                                @method('PUT')
                                                <label for="store_name" class="fw-bold mb-2">Give Name of Your Store</label>
                                                <input type="text" class="form-control" name="store_name" value="{{$stores_info->store_name}}">

                                                <label for="details" class="fw-bold mb-2">Description of Your Store</label>
                                                <input type="text" class="form-control" name="details" value="{{$stores_info->details}}">

                                                <label for="slug" class="fw-bold mb-2">Slug</label>
                                                <input type="text" class="form-control" name="slug" value="{{$stores_info->slug}}">
                                                <button type="submit" class="btn btn-primary w-100 mt-2">Update Store</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
@endsection