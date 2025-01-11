@extends('admin.layouts.layout')
@section('admin_page_title')
Manage Default Attribute - Admin Panel
@endsection
@section('admin_layout')
        <div class="row">
                <div class="col-12">
                        <div class="card">
                                <div class="card-header">
                                        <h5 class="card-title mb-0">All Default Attribute</h5>
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
                                                                        <th>Attribute</th>
                                                                        <th>Action</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($allattributes as $attribute)
                                                                <tr>
                                                                        <td>{{$attribute->id}}</td>
                                                                        <td>{{$attribute->attribute_value}}</td>
                                                                        <td>
                                                                                <a href="{{route('show.attribute', $attribute->id)}}" class="btn btn-info my-1 px-4">Edit</a>
                                                                                <form action="{{route('delete.attribute', $attribute->id)}}" method="POST">
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