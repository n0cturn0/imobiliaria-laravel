
<div>
    <div>
        <section class="section section-lg bg-default text-center">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-9 col-lg-7 col-xl-5">
                        <h3 class="font-weight-medium">Cadastrar Corretor</h3>
                        <!-- RD Mailform-->
                        <form method="POST" class="rd-form" wire:submit.prevent="save">
                            <div class="row row-20">
    
                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    {{ session('message') }}<br><a href="{{route('corretores-list')}}">Clique para ir ver os corretores cadastrados.</a>
                                </div>
                                @endif
    
    
                                <div class="col-12">
                                        <div class="form-wrap">
                                        <input class="form-input"  placeholder="Qual o nome do corretor" type="text" wire:model="nomedocorretor" data-constraints="@Required">
                                        @csrf
                                        </div>
                                        @error('nomedocorretor') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                    <div class="col-12">
                                        <label><h3>Envie uma foto</h3></label>
                                        <div class="form-wrap">
                                        <input type="file" class="button button-block button-secondary " required  wire:model="photo">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-wrap">
                                        <input class="form-input"  placeholder="Digite o e-mail deste corretor" type="text" wire:model="emailcorretor" data-constraints="@Required">
                                       
                                        </div>
                                        @error('emailcorretor') <span class="error">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-8">
                                        <div class="form-wrap">
                                        <input class="form-input" data-mask="(00) 00000-0000"  placeholder="Digite o telefone deste corretor" type="text" wire:model="telefonecorretor" data-constraints="@Required">
                                        
                                        </div>
                                        @error('telefonecorretor') <span class="error">{{ $message }}</span> @enderror
                                    </div>
    

                                <div class="col-12">
                                    <button class="button button-secondary" type="submit">Cadastrar Corretor</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pre footer section-->
    
    </div>
    
</div>
