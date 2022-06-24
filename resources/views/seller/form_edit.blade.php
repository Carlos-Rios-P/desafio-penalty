@extends('layout.main')

@section('conteudo-pagina')

<section class="section">

    <p class="flow-text center">Alterar dados do representante</p>

    <form action="{{route('seller.update', $seller->id)}}" method="POST">
        @method('PUT')
        @csrf

        <div class="input-field">
            <input type="text" name="nome" id="nome" value="{{$seller->nome}}"/>
            <label for="nome">Nome</label>
            @error('nome')
                <span class="red-text text-accent-3">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </div>

        <div class="input-field">
            <input type="text" name="email" id="email" value="{{$seller->email}}"/>
            <label for="email">Email</label>
            @error('email')
                <span class="red-text text-accent-3">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </div>

        <div class="right-align">
            <a class="btn-flat waves-effect" href="{{url()->previous()}}">Cancelar</a>
            <button class="btn waves-effect waves-light" type="submit">Alterar</button>
        </div>

    </form>

</section>

@endsection
