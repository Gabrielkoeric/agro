<x-layout title="Safra">
    <a href="{{route('home.index')}}" class="btn btn-dark my-3 pr">Home</a>
    <a href="{{route('safra.create')}}" class="btn btn-dark my-3">Nova Safra</a>

    <ul class="list-group">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID Safra</th>
                    <th scope="col">Descrição</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($safras as $safra)
                    <tr>
                        <td>{{ $safra->id_safra }}</td>
                        <td>{{ $safra->safra_nome }}</td>
                    </tr>
                @endforeach


                </tbody>
            </table>
    </ul>
</x-layout>



