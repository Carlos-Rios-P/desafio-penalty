@extends('layout.main')

@section('conteudo-pagina')

    <section class="section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CEP</th>
                    <th>Logradouro</th>
                    <th>Número</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{$customer->nome}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->cep}}</td>
                        <td>{{$customer->logradouro}}</td>
                        <td>{{$customer->numero}}</td>
                        <td>{{$customer->bairro}}</td>
                        <td>{{$customer->cidade}}</td>
                        <td>{{$customer->uf}}</td>
                        <td class="right-align">

                            <a href="{{route('customer.edit', $customer->id)}}">
                                <span style="cursor: pointer">
                                    <i class="material-icons blue-text text-darken-1">create</i>
                                </span>
                            </a>

                            <form action="{{route('customer.destroy', $customer->id)}}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')

                                <button style="border:0;background:transparent;" type="submit">
                                    <span style="cursor: pointer">
                                        <i class="material-icons red-text text-accent-3">delete_forever</i>
                                    </span>
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Não existem clientes cadastrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('customer.create')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>
    </section>

    <script>
        $(document).on('blur', '#cep', function() {
            const cep = $(this).val();

            console.log(cep);
        })
    </script>

@endsection
