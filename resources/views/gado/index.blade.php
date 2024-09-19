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
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gado->brinco }}</td>
                        <td>{{ $gado->gado_nome }}</td>
                        <td>{{ $gado->data_nascimento }}</td>
                        <td>{{ $gado->sexo }}</td>
                    </tr>
                @endforeach


                </tbody>
            </table>
    </ul>
</x-layout>