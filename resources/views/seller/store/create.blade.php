@extends('seller.layouts.layout')
@section('seller_page_title')
        Create Store
@endsection
@section('seller_layout')
        Create Store
        <div class="row">
                <div class="col-12">
                        <div class="card">
                                <div class="card-header">
                                        <h5 class="card-title mb-0">Create New Store</h5>
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

                                        <form action="{{route('store.publish')}}" method="POST">
                                                @csrf
                                                <label for="store_name" class="fw-bold mb-2">Give Name of Your Store</label>
                                                <input type="text" class="form-control" name="store_name" placeholder="Enter Store Name">
                                                
                                                <label for="details" class="fw-bold mb-2">Description of Your Store</label>
                                                <textarea class="form-control" name="details" id="details" cols="30" rows="10"></textarea>                                                
                                                
                                                <label for="slug" class="fw-bold mb-2">Slug</label>
                                                <input type="text" class="form-control" name="slug">
                                                <button type="submit" class="btn btn-primary w-100 mt-2">Create Store</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
@endsection