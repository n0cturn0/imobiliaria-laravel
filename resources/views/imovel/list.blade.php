@extends('layout.dashboard')
@section('imoveis-list')
<div class="container">
   
    
    <div class="table-custom-responsive">
      
      <table class="table-custom table-custom-primary">
        <thead>
          <tr>
            <th>Título do Imóvel</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Bairro</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($imovel as $item)
                
           
          <tr>
          <td><a href="{{url('imovel-novo/'.$item->id)}}">{{$item->titulo}}</a></td>
            <td>{{$item->estado}}</td>
            <td>{{$item->cidade}}</td>
            <td>{{$item->bairro}}</td>
          </tr>
          @endforeach
        <tfoot>
          <tr>
            <td>All Items</td>
            <td>Description</td>
            <td>Your Total</td>
            <td>$13.00</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
@endsection


