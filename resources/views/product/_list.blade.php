<div class="row">
    @foreach($products as $product)
        <div class="col-3 mb-4">
            <div class="card hover-shadow transition-1000 px-4 pt-3 border-0">
                <img class="card-img-top" src="{{ asset('uploads/'.$product->image) }}" alt="Card image cap">
                <div class="card-body d-flex px-0 pb-0">
                    <div class="text-capitalize mr-auto font-weight-bold">{{ $product->category->name }}</div>
                    <div class="ml-auto text-muted">#21243</div>
                </div>
                <div class="card-body px-0 pb-0 pt-1 d-flex">
                    <div class="card-title mr-auto">{{ $product->name }}</div>
                    <div class="card-title ml-auto font-weight-bold">${{ $product->price }}</div>
                </div>
                <div class="card-body px-0  text-center">
                    <a href="#" class="btn btn-success shadow-lg font-weight-light">В корзину</a>
                </div>
            </div>
        </div>
    @endforeach
  </div>