@extends('layout.dashboard')
@section('imoveis-list')
<div class="container">
   
    
    <div class="table-custom-responsive">
      
      <table class="table-custom table-custom-primary">
        <thead>
          <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Imovel</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contato as $item)
                
           
          <tr>
          <td><a href="{{url('sistema-gestao/'.$item->id)}}">{{$item->nome}}</a></td>
            <td>{{$item->email}}</td>
            <td>{{$item->telefone}}</td>
            <td>{{$item->mensagem}}</td>
            <td> <a href="{{url('sistema-gestao/'.$item->id)}}" class="button button-sm button-primary" type="submit">Prospecção</a></td>
          </tr>
          @endforeach
        <tfoot>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
@endsection


