

    @foreach ($destaqueshow as $item)

    <a class="product-corporate context-dark" href="single-property.html" style="background-image: url(storage/lancamentos/{{$item->foto_name}});">
        <div class="product-corporate-inner">
            <div class="product-corporate-caption">
                <h3 class="product-corporate-title">{{$item->cidade}}, {{$item->bairro}}</h3>
                <h4 class="product-corporate-info">{{$item->suite}} Suíte(s)</h4>
            </div>
        </div></a>
        @endforeach