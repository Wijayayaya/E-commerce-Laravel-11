<div>
    @foreach ($products as $product)
    <div>
    
    <p>{{$product->product_name}}</p>

    <p>{{$product->description}}</p>

    <p>{{$product->regular_price}}</p>

    </div>
    @endforeach
</div>
