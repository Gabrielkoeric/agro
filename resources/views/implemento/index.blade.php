<x-layout title="Implementos">
    <a href="{{route('home.index')}}" class="btn btn-dark my-3 pr">Home</a>
   <!--<a href="{{route('gado.create')}}" class="btn btn-dark my-3">Novo Terneiro</a>
    <a href="{{route('gado.create')}}" class="btn btn-dark my-3">Nova Compra</a>
    <a href="{{route('gado.create')}}" class="btn btn-dark my-3">Novo Venda</a>-->

    <ul class="list-group">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nome Implemento</th>
                    <th scope="col">Observacão</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($implementos as $implemento)
                    <tr>
                        <td>{{ $implemento->nome_implemento }}</td>
                        <td>{{ $implemento->observacao }}</td>
                    </tr>
                @endforeach


                </tbody>
            </table>
    </ul>
</x-layout>



