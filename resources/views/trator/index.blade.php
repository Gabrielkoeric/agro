<x-layout title="Trator">
    <a href="{{route('home.index')}}" class="btn btn-dark my-3 pr">Home</a>
   <!--<a href="{{route('gado.create')}}" class="btn btn-dark my-3">Novo Terneiro</a>
    <a href="{{route('gado.create')}}" class="btn btn-dark my-3">Nova Compra</a>
    <a href="{{route('gado.create')}}" class="btn btn-dark my-3">Novo Venda</a>-->

    <ul class="list-group">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Ano</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tratores as $trator)
                    <tr>
                        <td>{{ $trator->marca }}</td>
                        <td>{{ $trator->modelo }}</td>
                        <td>{{ $trator->ano }}</td>
                    </tr>
                @endforeach


                </tbody>
            </table>
    </ul>
</x-layout>



