@if($all_products->count() >=1)
<div class="row">
    @foreach($all_products as $product)
        <div class="col-md-3 my-2">
            <div class="card" >
                <img src="{{ asset('images/'.$product->banner_lancamento) }}" class="card-img-top" style="height:250px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->cidade }}</h5>
                    <p class="card-text">{{ $product->descricao }}</p>
                    <h4 class="btn btn-dark">Price ${{ $product->valor }}</h4>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="col-md-12 my-5 text-center">
        <h2>Nothing Found</h2>
    </div>
<div>
@endif
