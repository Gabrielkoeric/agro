<x-layout title="Areas">
    <a href="{{route('home.index')}}" class="btn btn-dark my-3 pr">Home</a>
   <!--<a href="{{route('gado.create')}}" class="btn btn-dark my-3">Novo Terneiro</a>
    <a href="{{route('gado.create')}}" class="btn btn-dark my-3">Nova Compra</a>
    <a href="{{route('gado.create')}}" class="btn btn-dark my-3">Novo Venda</a>-->

    <ul class="list-group">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Tamanho</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area->nome }}</td>
                        <td>{{ $area->tamanho }}</td>
                    </tr>
                @endforeach


                </tbody>
            </table>
    </ul>
</x-layout>



