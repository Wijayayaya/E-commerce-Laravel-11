@extends('seller.layouts.layout')
@section('seller_page_title')
        Manage Store
@endsection
@section('seller_layout')
        Manage Store
        <div class="row">
                <div class="col-12">
                        <div class="card">
                                <div class="card-header">
                                        <h5 class="card-title mb-0">Manage Your Store</h5>
                                </div>
                                @if (Session::has('success'))
                                        <div class="alert alert-success alert-dismissible fade show">
                                                {{ Session::get('success') }}
                                        </div>
                                @endif
                                <div class="card-body">
                                        <div class="table-responsive">
                                                <table class="table">
                                                        <thead>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Store Name</th>
                                                                        <th>Slug</th>
                                                                        <th>Details</th>
                                                                        <th>Action</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($stores as $store)
                                                                <tr>
                                                                        <td>{{$store->id}}</td>
                                                                        <td>{{$store->store_name}}</td>
                                                                        <td>{{$store->slug}}</td>
                                                                        <td>{{$store->details}}</td>
                                                                        <td>
                                                                                <a href="{{route('show.store', $store->id)}}" class="btn btn-info my-1 px-4">Edit</a>
                                                                                <form action="{{route('delete.store', $store->id)}}" method="POST">
                                                                                        @csrf
                                                                                        @method('DELETE')
                                                                                        <input type="submit" value="Delete" class="btn btn-danger my-1 px-3">
                                                                                </form>
                                                                        </td>
                                                                </tr>
                                                                @endforeach
                                                        </tbody>
                                                </table>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
@endsection