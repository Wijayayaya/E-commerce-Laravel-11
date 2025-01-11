@extends('seller.layouts.layout')
@section('seller_page_title')
        Manage Product
@endsection
@section('seller_layout')
        <div class="row">
                <div class="col-12">
                        <div class="card">
                                <div class="card-header">
                                        <h5 class="card-title mb-0">All Category</h5>
                                </div>
                                @if (Session::has('success'))
                                        <div class="alert alert-success alert-dismissible fade show">
                                                {{ Session::get('success') }}
                                        </div>
                                @endif
                                <div class="card-body">
                                        <div class="table-responsive">
                                                <table class="table">
                                                        <thead >
                                                                <tr class="align-middle  justify-center">
                                                                        <th>#</th>
                                                                        <th>Product Name</th>
                                                                        <th>Description</th>
                                                                        <th>SKU</th>
                                                                        <th>Category</th>
                                                                        <th>Sub Category</th>
                                                                        <th>Store Name</th>
                                                                        <th>Price</th>
                                                                        <th>Discount Price</th>
                                                                        <th>Tax</th>
                                                                        <th>Stock</th>
                                                                        <th>Images</th>
                                                                        <th>Action</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($products as $product)
                                                                <tr>
                                                                        <td>{{$product->id}}</td>
                                                                        <td>{{$product->product_name}}</td>
                                                                        <td>{{$product->description}}</td>
                                                                        <td>{{$product->sku}}</td>
                                                                        <td>{{$product->category->category_name}}</td>
                                                                        <td>{{$product->subcategory->subcategory_name }}</td>
                                                                        <td>{{$product->store->store_name}}</td>
                                                                        <td>{{$product->regular_price}}</td>
                                                                        <td>{{$product->discounted_price}}</td>
                                                                        <td>{{$product->tax_rate}}</td>
                                                                        <td>{{$product->stock_quantity}}</td>
                                                                        <td>
                                                                        @foreach($product->images as $image)
                                                                                <img src="{{ asset('storage/' . $image->img_path) }}" alt="Product Image" style="max-width: 200px;">
                                                                        @endforeach
                                                                        </td>
                                                                        <td>
                                                                                <a href="{{route('show.product', $product->id)}}" class="btn btn-info my-1 px-4">Edit</a>
                                                                                <form action="{{route('delete.product', $product->id)}}" method="POST">
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