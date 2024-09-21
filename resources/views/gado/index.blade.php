<x-layout title="Gado">
    <a href="{{route('home.index')}}" class="btn btn-dark my-3 pr">Home</a>
    <a href="{{route('gado.create')}}" class="btn btn-dark my-3">Novo Terneiro</a>
    <!--<a href="{{route('gado.create')}}" class="btn btn-dark my-3">Nova Compra</a>
    <a href="{{route('gado.create')}}" class="btn btn-dark my-3">Novo Venda</a>-->

    <ul class="list-group">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brinco</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data Nascimento</th>
                    <th scope="col">Sexo</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($gados as $gado)
                    <tr><!--
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gado->brinco }}</td>
                        <td>{{ $gado->gado_nome }}</td>
                        <td>{{ $gado->data_nascimento }}</td>
                        <td>{{ $gado->sexo }}</td>-->
                        <td><a href="{{ route('gado.edit', $gado->id_gado) }}" class="text-decoration-none text-dark">{{ $loop->iteration }}</a></td>
                        <td><a href="{{ route('gado.edit', $gado->id_gado) }}" class="text-decoration-none text-dark">{{ $gado->brinco }}</a></td>
                        <td><a href="{{ route('gado.edit', $gado->id_gado) }}" class="text-decoration-none text-dark">{{ $gado->gado_nome }}</a></td>
                        <td><a href="{{ route('gado.edit', $gado->id_gado) }}" class="text-decoration-none text-dark">{{ $gado->data_nascimento }}</a></td>
                        <td><a href="{{ route('gado.edit', $gado->id_gado) }}" class="text-decoration-none text-dark">{{ $gado->sexo }}</a></td>
                    </tr>
                @endforeach


                </tbody>
            </table>
    </ul>
</x-layout>
