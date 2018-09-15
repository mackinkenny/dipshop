<div class="row">
    @foreach($products as $product)
        <div class="col-3 mb-4">
            <div class="card hover-shadow border-bottom border-top-0 border-left-0 border-right-0 transition-1000 px-4 pt-3">
                <img class="card-img-top" src="{{ asset('uploads/'.$product->image) }}" alt="Card image cap">
                <div class="card-body d-flex px-0 pb-0">
                    <div class="text-capitalize mr-auto font-weight-bold">{{ $product->category->name }}</div>
                    <div class="ml-auto text-muted">#21243</div>
                </div>
                <div class="card-body px-0 pb-0 pt-1 d-flex">
                    <div class="card-title mr-auto" style="min-height: 46px;">{{ $product->name }}</div>
                    <div class="card-title ml-auto font-weight-bold">${{ $product->price }}</div>
                </div>
                <div class="card-body px-0  text-center">
                    <p class="btn btn-success shadow-lg font-weight-light cart"  data-toggle="tooltip" data-placement="bottom" title="Корзина временно не доступна">В корзину</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@push('scripts')
    <script>

        $('.hover-shadow').hover(
            function (e) {
                $(this).addClass('shadow-lg');
            },
            function (e) {
                $(this).removeClass('shadow-lg');
            }
        );
    </script>
@endpush