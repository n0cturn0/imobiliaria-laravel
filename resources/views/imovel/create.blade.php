@extends('layout.dashboard')
@section('create-imovel')
@extends('layout.dashboard')
@section('lancamentocriacao')

<title>Cadastrando Lançamento</title>
<section class="section section-lg bg-default text-center">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-9 col-lg-7 col-xl-5">
          <h3 class="font-weight-medium">Lançamento </h3>
          <!-- RD Mailform-->
          <form class="rd-form rd-mailform" data-form-output="form-output-global"  method="post" action="{{url('insere-imovel')}}">

           @csrf
          
            <div class="row row-20">
            @if(session()->has('message'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('message') }}
            </div>
            @endif
                
            
              
              
              

              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input"   placeholder="Título para o imóvel" type="text" name="titulo" data-constraints="@Required">
                </div>
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  <select class="form-input @error('tipo') is-invalid @enderror" name="tipo">
                    <option value="" disabled selected>Tipo</option>
                    <option value="0">Apartamento</option>
                    <option value="1">Casa Térrea</option>
                    <option value="2">Sobrado</option>
                    <option value="3">Casa Condomínio</option>
                    <option value="4">Sobrado Condomínio</option>
                    <option value="5">Terreno</option>
                  </select>
                </div>
                @error('tipo')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  {{-- <label>Modalidade</label> --}}
                  <select class="form-input @error ('lancamento_status') is-invalid @enderror" name="lancamento_status">
                    <option value=""  selected disabled>Modalidade</option>
                    <option value="0">Na Planta</option>
                    <option value="1">Pronto</option>
                  </select>
                </div>
                @error('lancamento_status')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  
                  <select class="form-input @error ('estado') is-invalid @enderror" name="estado" >
                    <option value="" disabled selected>Selecione um estado</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                  </select>
                </div>
                @error('estado')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input @error('cidade') is-invalid @enderror" placeholder="Cidade"  type="text" name="cidade"  required>
                  
                </div>
                @error('cidade')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" placeholder="Bairro" id="contact-name" type="text" name="bairro" required>
                  
                </div>
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" placeholder="Rua" id="contact-name" type="text" name="rua" required>
                
                </div>
              </div>
              <div class="col-6">
                <div class="form-wrap">
                  <input class="form-input" placeholder="Número" id="contact-name" type="text" name="numero" required>
                 
                </div>
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" placeholder="Cep" id="contact-name" type="text" name="cep" data-constraints="@Required">
                  
                </div>
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  <select class="form-input @error ('ruapavimentada') is-invalid @enderror" name="ruapavimentada" >
                    <option value="" disabled selected>Rua Pavimentada?</option>
                    <option value="0">Sim</option>
                    <option value="1">Não</option>
                  </select>
                </div>
                @error('ruapavimentada')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-12"> 
                <h3 class="font-weight-medium">Caracteristícas do imóvel</h3>
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label"></label>
                  <select class="form-input @error ('quarto') is-invalid @enderror" name="quarto">
                    <option value="" disabled selected>Quantos quartos</option>
                    <option value="1">01</option>
                  <option value="2">02</option>
                  <option value="3">03</option>
                  <option value="4">04</option>
                  <option value="5">05</option>
                  </select>
                </div>
                @error('quarto')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  
                  <select class="form-input @error ('banheiro') is-invalid @enderror" name="banheiro">
                    <option value="" disabled selected>Quantos banheiros?</option>
                    <option value="1">01</option>
                  <option value="2">02</option>
                  <option value="3">03</option>
                  <option value="4">04</option>
                  <option value="5">05</option>
                  </select>
                </div>
            
                @error('banheiro')  
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>


              <div class="col-12">
                <div class="form-wrap">
                  {{-- <label class="form-label" for="contact-email">Quantas suítes?</label> --}}
                  <select class="form-input @error ('suite') is-invalide @enderror" name="suite">
                    <option value="" disabled selected>Quantas suítes?</option>
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                  </select>
                </div>
                @error('suite')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  {{-- <label class="form-label" for="contact-email">Quantas vagas na garagem</label> --}}
                  <select class="form-input @error ('garagem') is-invalid @enderror" name="garagem" >
                    <option value="" disabled selected>Quantas vagas na garagem?</option>
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                  </select>
                </div>
                @error('garagem')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-4">
                <div class="form-wrap">
                  <input class="form-input" placeholder="Mts Construídos" id="contact-name" type="text" name="mtsconst" required>
                 
                </div>
              </div>

              <div class="col-4">
                <div class="form-wrap">
                  <input class="form-input form-control" placeholder="Valor"  type="text" name="valor" onkeypress="$(this).mask('R$ #.##0,00', {reverse: true});">
                 
                </div>
              </div>

              <div class="col-12">
                <div class="form-wrap">
                 
                  <textarea placeholder="Texto com outras informações do imóvel" class="form-input" id="contact-message" name="descricao" data-constraints="@Required"></textarea>
                </div>
              </div>

 
            

             
              
             
              <div class="col-12">
                <button class="button button-secondary" type="submit">Cadastrar Imóvel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script>$('.valor').mask('#.##0,00', {reverse: true});</script>
@endsection


@endsection