@extends('layout.main')

@section('conteudo-pagina')

    <section class="section">

        <p class="flow-text center">Clientes cadastrados</p>

        <table class="highlight">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Representante</th>
                    <th class="center-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{$customer->nome}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->seller->nome}}</td>
                        <td class="center-align">

                            <a href="{{route('customer.edit', $customer->id)}}">
                                <span style="cursor: pointer">
                                    <i class="material-icons blue-text text-darken-1">create</i>
                                </span>
                            </a>

                            <a href="{{route('customer.show', $customer->id)}}">
                                <span style="cursor: pointer">
                                    <i class="material-icons blue-text text-darken-1">attach_file</i>
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
                <i class="large material-icons green accent-4">add</i>
            </a>
        </div>
    </section>

@endsection
