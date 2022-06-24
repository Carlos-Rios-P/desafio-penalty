@extends('layout.main')

@section('conteudo-pagina')

    <section class="section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($sellers as $seller)
                    <tr>
                        <td>{{$seller->nome}}</td>
                        <td>{{$seller->email}}</td>
                        <td class="right-align">

                            <a href="{{route('seller.edit', $seller->id)}}">
                                <span style="cursor: pointer">
                                    <i class="material-icons blue-text text-darken-1">create</i>
                                </span>
                            </a>

                            <form action="{{route('seller.delete', $seller->id)}}" method="POST" style="display:inline">
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
                        <td colspan="2">Não existem representantes cadastrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('seller.create')}}">
                <i class="large material-icons green accent-4">add</i>
            </a>
        </div>
    </section>

@endsection

