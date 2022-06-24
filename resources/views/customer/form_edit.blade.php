@extends('layout.main')

@section('conteudo-pagina')

<section class="section">

    <p class="flow-text center">Alterar dados do cliente</p>

    <form action="{{route('customer.update', $customer->id)}}" method="POST">
        @method('PUT')
        @csrf

        <div class="input-field">
            <select name="seller_id" id="seller_id" >
                <option value="" disabled selected>{{$seller}}</option>
                @foreach ($sellers as $seller)
                      <option value={{$seller->id}} > {{$seller->nome}}</option>
                @endforeach
              </select>
              <label>Representante</label>
              @error('seller_id')
                  <span class="red-text text-accent-3">
                      <small>{{$message}}</small>
                  </span>
              @enderror
        </div>

        <div class="input-field">
            <input type="text" name="nome" id="nome" value="{{$customer->nome}}"/>
            <label for="nome">Nome do cliente</label>
            @error('nome')
                <span class="red-text text-accent-3">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </div>

        <div class="input-field">
            <input type="text" name="email" id="email" value="{{$customer->email}}"/>
            <label for="email">Email do cliente</label>
            @error('email')
                <span class="red-text text-accent-3">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input type="text" name="cep" id="cep" class="cep" value="{{$customer->cep}}"/>
                <label for="cep">CEP</label>
                @error('cep')
                    <span class="red-text text-accent-3">
                        <small>{{$message}}</small>
                    </span>
                @enderror
            </div>
            <div class="input-field col s3">
                <input type="text" name="cidade" id="cidade" value="{{$customer->cidade}}"/>
                <label for="cidade">Cidade</label>
                @error('cidade')
                    <span class="red-text text-accent-3">
                        <small>{{$message}}</small>
                    </span>
                @enderror
            </div>
            <div class="input-field col s3">
                <input type="text" name="uf" id="uf" class="uf" value="{{$customer->uf}}"/>
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
                <input type="text" name="logradouro" id="logradouro" value="{{$customer->logradouro}}"/>
                <label for="logradouro">Logradouro</label>
                @error('logradouro')
                    <span class="red-text text-accent-3">
                        <small>{{$message}}</small>
                    </span>
                @enderror
            </div>
            <div class="input-field col s4">
                <input type="text" name="bairro" id="bairro" value="{{$customer->bairro}}"/>
                <label for="bairro">Bairro</label>
                @error('bairro')
                    <span class="red-text text-accent-3">
                        <small>{{$message}}</small>
                    </span>
                @enderror
            </div>
            <div class="input-field col s2">
                <input type="text" name="numero" id="numero" value="{{$customer->numero}}"/>
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
            <button class="btn waves-effect waves-light" type="submit">Alterar</button>
        </div>

    </form>

</section>

@endsection
