<div>
    <section class="section section-lg bg-default text-center">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 col-lg-7 col-xl-5">
                    <h3 class="font-weight-medium">Informação do Empreendimento</h3>
                    <!-- RD Mailform-->
                    <form method="POST" class="rd-form" wire:submit.prevent="save">
                        <div class="row row-20">

                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    {{ session('message') }}
                                </div>
                            @endif


                            <div class="col-12">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-name" placeholder="Digite o nome do empreedimento" type="text" wire:model="nomedoempreendimento" data-constraints="@Required">
                                    @csrf
                                </div>
                                @error('nomedoempreendimento') <span class="error">{{ $message }}</span> @enderror
                            </div>



{{--                            <div class="col-12">--}}

{{--                                <div class="form-wrap">--}}
{{--                                    <label>Selecione o status</label>--}}
{{--                                    <select class="form-input" name="status">--}}
{{--                                        <option value="trp"></option>--}}
{{--                                        <option value="0">Planta</option>--}}
{{--                                        <option value="1">Pronto</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-12">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <label>Selecione o tipo</label>--}}
{{--                                    <select class="form-input" name="tipo">--}}
{{--                                        <option value="trp"></option>--}}
{{--                                        <option value="0">Apartamento</option>--}}
{{--                                        <option value="1">Casa Térrea</option>--}}
{{--                                        <option value="2">Sobrado</option>--}}
{{--                                        <option value="3">Casa Condomínio</option>--}}
{{--                                        <option value="4">Sobrado Condomínio</option>--}}
{{--                                        <option value="5">Terreno</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}





{{--                            <div class="col-12">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <label>Selecione o estado</label>--}}
{{--                                    <select class="form-input" name="estado">--}}
{{--                                        <option value="trp"></option>--}}
{{--                                        <option value="MS">Mato Grosso do Sul</option>--}}
{{--                                        <option value="AC">Acre</option>--}}
{{--                                        <option value="AL">Alagoas</option>--}}
{{--                                        <option value="AP">Amapá</option>--}}
{{--                                        <option value="AM">Amazonas</option>--}}
{{--                                        <option value="BA">Bahia</option>--}}
{{--                                        <option value="CE">Ceará</option>--}}
{{--                                        <option value="DF">Distrito Federal</option>--}}
{{--                                        <option value="ES">Espírito Santo</option>--}}
{{--                                        <option value="GO">Goiás</option>--}}
{{--                                        <option value="MA">Maranhão</option>--}}
{{--                                        <option value="MT">Mato Grosso</option>--}}
{{--                                        <option value="MG">Minas Gerais</option>--}}
{{--                                        <option value="PA">Pará</option>--}}
{{--                                        <option value="PB">Paraíba</option>--}}
{{--                                        <option value="PR">Paraná</option>--}}
{{--                                        <option value="PE">Pernambuco</option>--}}
{{--                                        <option value="PI">Piauí</option>--}}
{{--                                        <option value="RJ">Rio de Janeiro</option>--}}
{{--                                        <option value="RN">Rio Grande do Norte</option>--}}
{{--                                        <option value="RS">Rio Grande do Sul</option>--}}
{{--                                        <option value="RO">Rondônia</option>--}}
{{--                                        <option value="RR">Roraima</option>--}}
{{--                                        <option value="SC">Santa Catarina</option>--}}
{{--                                        <option value="SP">São Paulo</option>--}}
{{--                                        <option value="SE">Sergipe</option>--}}
{{--                                        <option value="TO">Tocantins</option>--}}
{{--                                        <option value="EX">Estrangeiro</option>--}}
{{--                                        <option value="Indefinido">...</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-12">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <input class="form-input" id="contact-name" placeholder="Cidade" type="text" name="cidade" data-constraints="@Required">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-12">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <input class="form-input" id="contact-name" placeholder="Bairro" type="text" name="bairro" data-constraints="@Required">--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <input class="form-input" id="contact-name" placeholder="Rua" type="text" name="rua" data-constraints="@Required">--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <input type="radio" name="ruapavimentada" value="0" checked> Rua pavimentada<br>--}}
{{--                                    <input type="radio" name="ruapavimentada" value="1" checked> Rua não pavimentada--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-6">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <input class="form-input" id="contact-name" type="text" name="número" data-constraints="@Required">--}}
{{--                                    <label class="form-label" for="contact-name">Número</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}







{{--                            <div class="col-12">--}}
{{--                                <h3 class="font-weight-medium">Caracteristícas do imóvel</h3>--}}
{{--                            </div>--}}


{{--                            <div class="col-12">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <label>Quantos quartos</label>--}}
{{--                                    <select class="form-input" name="quarto">--}}
{{--                                        <option value="trp"></option>--}}
{{--                                        <option value="1">01</option>--}}
{{--                                        <option value="2">02</option>--}}
{{--                                        <option value="3">03</option>--}}
{{--                                        <option value="4">04</option>--}}
{{--                                        <option value="5">05</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <label>Quantos banheiros?</label>--}}
{{--                                    <select class="form-input" name="banheiro">--}}
{{--                                        <option value="trp"></option>--}}
{{--                                        <option value="1">01</option>--}}
{{--                                        <option value="2">02</option>--}}
{{--                                        <option value="3">03</option>--}}
{{--                                        <option value="4">04</option>--}}
{{--                                        <option value="5">05</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <label>Quantas suítes?</label>--}}
{{--                                    <select class="form-input" name="suite">--}}
{{--                                        <option value=""></option>--}}
{{--                                        <option value="1">01</option>--}}
{{--                                        <option value="2">02</option>--}}
{{--                                        <option value="3">03</option>--}}
{{--                                        <option value="4">04</option>--}}
{{--                                        <option value="5">05</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <label>Quantas vagas na garagem</label>--}}
{{--                                    <select class="form-input" name="garagem" >--}}
{{--                                        <option value=""></option>--}}
{{--                                        <option value="1">01</option>--}}
{{--                                        <option value="2">02</option>--}}
{{--                                        <option value="3">03</option>--}}
{{--                                        <option value="4">04</option>--}}
{{--                                        <option value="5">05</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}




{{--                            <div class="col-12">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <label>Descrição do Lançamento</label>--}}
{{--                                    <textarea class="form-input" id="contact-message" name="descricao" data-constraints="@Required"></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-6">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <input class="form-input" id="contact-name" placeholder="Metros Construídos" type="text" name="metroscontruidos" data-constraints="@Required">--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-6">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <input class="form-input" id="contact-name" placeholder="Valor" type="text" name="valor" data-constraints="@Required">--}}

{{--                                </div>--}}
{{--                            </div>--}}





                            <div class="col-12">

                                <button class="button button-secondary" type="submit">Cadastrar Imóvel</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Pre footer section-->

</div>
