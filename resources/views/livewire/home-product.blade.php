<div>   
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