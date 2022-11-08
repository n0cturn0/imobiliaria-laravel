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
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($imovel as $item)
                
           
          <tr>
          <td><a href="{{url('imovel-novo/'.$item->id)}}">{{$item->titulo}}</a></td>
            <td>{{$item->estado}}</td>
            <td>{{$item->cidade}}</td>
            <td>{{$item->bairro}}</td>
            <td> <a href="{{url('imovel-deletar/'.$item->id)}}" class="button button-sm button-primary" type="submit">Apagar Imóvel</a></td>
          </tr>
          @endforeach
        <tfoot>
          <tr>
            <th>Título do Imóvel</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Bairro</th>
            <th></th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
@endsection


