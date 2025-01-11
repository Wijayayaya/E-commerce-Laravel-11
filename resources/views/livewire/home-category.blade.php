<div>
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categories</h1>
            <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="{{asset('img/products_images/1682976267.png')}}" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">{{ $category->category_name }}</h5>
            <p class="text-center"><a class="btn btn-success" href="{{route('product')}}">Go Shop</a></p>
        </div>
        @endforeach
    </div>
</div>