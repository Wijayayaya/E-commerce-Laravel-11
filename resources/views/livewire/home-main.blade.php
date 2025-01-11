<div>
<!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{asset('img/carousel/banner_2.jpg')}}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Ye</b> Computer</h1>
                                <h3 class="h2">And the comback is complete</h3>
                                <p>
                                    3 Years Warranty on all products.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->
    

    <!-- Start Categories of The Month -->
    <section class="container py-5">
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
    </section>
    <!-- End Categories of The Month -->

    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            
            
            <!-- Products with category_id 3 -->
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="h2">Laptop</h2>
                </div>
                @foreach ($productsCategory3 as $product)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow radius-100">
                        <a href="" class="">
                            @foreach($product->images as $image)
                                <img src="{{ asset('storage/' . $image->img_path) }}" alt="Product Image" style="max-width: 415px;">
                            @endforeach
                        </a>
                        <div class="card-body text-start">
                            <a href="" class="h2 text-decoration-none text-dark font">{{ $product->product_name }}</a>
                            <p class="card-text">
                                {{ $product->description }}
                            </p>
                            <p class="text-muted">IDR {{ $product->regular_price }} </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Products with category_id 2 -->
            <div class="row">
                <div class="col-12 text-center  ">
                    <h2 class="h2">Computer</h2>
                </div>
                @foreach ($productsCategory2 as $product)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow radius-100">
                        <a href="" class="">
                            @foreach($product->images as $image)
                                <img src="{{ asset('storage/' . $image->img_path) }}" alt="Product Image" style="max-width: 415px;">
                            @endforeach
                        </a>
                        <div class="card-body text-start">
                            <a href="" class="h2 text-decoration-none text-dark font">{{ $product->product_name }}</a>
                            <p class="card-text">
                                {{ $product->description }}
                            </p>
                            <p class="text-muted">IDR {{ $product->regular_price }} </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Products with category_id 4 -->
            <div class="row">
                <div class="col-12 text-center  ">
                    <h2 class="h2">Keyboard</h2>
                </div>
                @foreach ($productsCategory4 as $product)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow radius-100">
                        <a href="" class="">
                            @foreach($product->images as $image)
                                <img src="{{ asset('storage/' . $image->img_path) }}" alt="Product Image" style="max-width: 415px;">
                            @endforeach
                        </a>
                        <div class="card-body text-start">
                            <a href="" class="h2 text-decoration-none text-dark font">{{ $product->product_name }}</a>
                            <p class="card-text">
                                {{ $product->description }}
                            </p>
                            <p class="text-muted">IDR {{ $product->regular_price }} </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
</div>