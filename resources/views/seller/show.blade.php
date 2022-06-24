@extends('layout.main')

@section('conteudo-pagina')

    <section class="section">

        <p class="flow-text">Clientes:</p>

        <table class="highlight">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{$customer->nome}}</td>
                        <td>{{$customer->email}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Este representante ainda não possui clientes cadastrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="center-align">
            <a class="btn waves-effect waves-light green accent-4" href="{{url()->previous()}}">Voltar</a>
        </div>

    </section>

@endsection
