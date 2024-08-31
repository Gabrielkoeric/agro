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
                        <td><a href="{{ route('safra.edit', $safra->id_safra ) }}" class="text-decoration-none text-dark">{{ $safra->id_safra }}</a></td>
                        <td><a href="{{ route('safra.edit', $safra->id_safra ) }}" class="text-decoration-none text-dark">{{ $safra->safra_nome }}</a></td>
                    </tr>
                @endforeach


                </tbody>
            </table>
    </ul>
</x-layout>



