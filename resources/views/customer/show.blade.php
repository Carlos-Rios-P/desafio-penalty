@extends('layout.main')

@section('conteudo-pagina')

    <section class="section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CEP</th>
                    <th>UF</th>
                    <th>Cidade</th>
                    <th>Logradouro</th>
                    <th>Número</th>
                    <th>Bairro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$customer->nome}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->cep}}</td>
                    <td>{{$customer->uf}}</td>
                    <td>{{$customer->cidade}}</td>
                    <td>{{$customer->logradouro}}</td>
                    <td>{{$customer->numero}}</td>
                    <td>{{$customer->bairro}}</td>
                </tr>
            </tbody>
        </table>

        <div class="center-align">
            <a class="btn waves-effect waves-light green accent-4" href="{{url()->previous()}}">Voltar</a>
        </div>

    </section>

@endsection
