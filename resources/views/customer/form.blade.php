@extends('layout.main')

@section('conteudo-pagina')

    <section class="section">
        <form action="{{route('customer.store')}}" method="POST" class="col s12">
            @csrf

                <div class="input-field">
                    <select name="seller_id" id="seller_id">
                        <option value="" disabled selected>Selecione o representante</option>
                        @foreach ($sellers as $seller)
                              <option value={{$seller->id}} > {{$seller->nome}}</option>
                        @endforeach
                      </select>
                      <label>Cliente</label>
                      @error('seller_id')
                          <span class="red-text text-accent-3">
                              <small>{{$message}}</small>
                          </span>
                      @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="nome" id="nome"/>
                    <label for="nome">Nome do cliente</label>
                    @error('nome')
                        <span class="red-text text-accent-3">
                            <small>{{$message}}</small>
                        </span>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="email" id="email"/>
                    <label for="email">Email do cliente</label>
                    @error('email')
                        <span class="red-text text-accent-3">
                            <small>{{$message}}</small>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" name="cep" id="cep" class="cep"/>
                        <label for="cep">CEP</label>
                        @error('cep')
                            <span class="red-text text-accent-3">
                                <small>{{$message}}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s3">
                        <input type="text" name="cidade" id="cidade"/>
                        <label for="cidade">Cidade</label>
                        @error('cidade')
                            <span class="red-text text-accent-3">
                                <small>{{$message}}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s3">
                        <input type="text" name="uf" id="uf" class="uf"/>
                        <label for="uf">UF</label>
                        @error('uf')
                            <span class="red-text text-accent-3">
                                <small>{{$message}}</small>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" name="logradouro" id="logradouro"/>
                        <label for="logradouro">Logradouro</label>
                        @error('logradouro')
                            <span class="red-text text-accent-3">
                                <small>{{$message}}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s4">
                        <input type="text" name="bairro" id="bairro"/>
                        <label for="bairro">Bairro</label>
                        @error('bairro')
                            <span class="red-text text-accent-3">
                                <small>{{$message}}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s2">
                        <input type="text" name="numero" id="numero"/>
                        <label for="numero">Número</label>
                        @error('numero')
                            <span class="red-text text-accent-3">
                                <small>{{$message}}</small>
                            </span>
                        @enderror
                    </div>
                </div>

            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{url()->previous()}}">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">Adicionar</button>
            </div>

        </form>

    </section>

@endsection
