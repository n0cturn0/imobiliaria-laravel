@extends('layout.dashboard')
@section('lancamentocriacao')
<title>{{$title}}</title>
<section class="section section-lg bg-default text-center">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-9 col-lg-7 col-xl-5">
          <h3 class="font-weight-medium">Lançamento </h3>
          <!-- RD Mailform-->
          <form class="rd-form rd-mailform" data-form-output="form-output-global"  method="post" action="{{url('novo-lancamento')}}">
           @csrf
            <div class="row row-20">

              
              
              {{-- <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-email">Selecione o estado</label>
                  <select class="form-input" name="estado" id="instrumento">
                    <option value="trp"></option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Indefinido">...</option>
                  </select>
                </div>
              </div> --}}

              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" id="contact-name" placeholder="Nome do lançamento" type="text" name="nome" data-constraints="@Required">
                </div>
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  <select class="form-input" name="estado" id="instrumento">
                    <option value="" disabled selected>Tipo</option>
                    <option value="0">Apartamento</option>
                    <option value="1">Casa Térrea</option>
                    <option value="2">Sobrado</option>
                    <option value="3">Casa Condomínio</option>
                    <option value="4">Sobrado Condomínio</option>
                    <option value="5">Terreno</option>
                  </select>
                </div>
              </div>




               <div class="col-12">
                <div class="form-wrap">
                  <select class="form-input" name="estado" id="instrumento">
                    <option value="" disabled selected>Modalidade</option>
                    <option value="0">Na Planta</option>
                    <option value="1">Pronto</option>
                  </select>
                </div>
              </div>

                <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-email">Selecione o estado</label>
                  <select class="form-input" name="estado" id="instrumento">
                    <option value="trp"></option>
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
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" placeholder="Cidade" id="contact-name" type="text" name="cidade" data-constraints="@Required">
                  
                </div>
              </div>
            
              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" placeholder="Bairro" id="contact-name" type="text" name="bairro" data-constraints="@Required">
                  
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" placeholder="Rua" id="contact-name" type="text" name="rua" data-constraints="@Required">
                
                </div>
              </div>
              <div class="col-6">
                <div class="form-wrap">
                  <input class="form-input" placeholder="Número" id="contact-name" type="text" name="número" data-constraints="@Required">
                 
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" id="contact-name" type="text" name="cep" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Cep</label>
                </div>
              </div>
              
             
              <div class="col-12">
                <div class="form-wrap">
                  <select class="form-input" name="estado" id="instrumento">
                    <option value="" disabled selected>Rua Pavimentada?</option>
                    <option value="0">Sim</option>
                    <option value="1">Não</option>
                  </select>
                </div>
              </div>

            
              <div class="col-12"> 
                <h3 class="font-weight-medium">Caracteristícas do imóvel</h3>
              </div>


              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-email">Quantos quartos</label>
                  <select class="form-input" name="quarto" id="instrumento">
                    <option value="trp"></option>
                    <option value="1">01</option>
                  <option value="2">02</option>
                  <option value="3">03</option>
                  <option value="4">04</option>
                  <option value="5">05</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-email">Quantos banheiros?</label>
                  <select class="form-input" name="banheiro" id="instrumento">
                    <option value="trp"></option>
                    <option value="1">01</option>
                  <option value="2">02</option>
                  <option value="3">03</option>
                  <option value="4">04</option>
                  <option value="5">05</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-email">Quantas suítes?</label>
                  <select class="form-input" name="suite" id="instrumento">
                    <option value=""></option>
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-email">Quantas vagas na garagem</label>
                  <select class="form-input" name="garagem" id="instrumento">
                    <option value=""></option>
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                  </select>
                </div>
              </div>
              

              <div class="col-4">
                <div class="form-wrap">
                  <input class="form-input" placeholder="Mts Construídos" id="contact-name" type="text" name="titulo" data-constraints="@Required">
                 
                </div>
              </div>

              <div class="col-4">
                <div class="form-wrap">
                  <input class="form-input" placeholder="Valor" id="contact-name" type="text" name="titulo" data-constraints="@Required">
                 
                </div>
              </div>

              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message">Texto com outras informações do imóvel</label>
                  <textarea class="form-input" id="contact-message" name="titulo" data-constraints="@Required"></textarea>
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
@endsection
