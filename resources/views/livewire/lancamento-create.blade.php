<div>
    <section class="section section-lg bg-default text-center">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 col-lg-7 col-xl-5">
                    <h3 class="font-weight-medium">Informação do Lançamento</h3>
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
                            <div class="col-12">
                                <label><h3>Envie um Banner</h3></label>
                                <div class="form-wrap">
                            <input type="file" class="button button-block button-secondary " required  wire:model="photo">
                            </div>
                        </div>

                            <div class="col-12">
                                <button class="button button-secondary" type="submit">Cadastrar Empreendimento</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Pre footer section-->

</div>
