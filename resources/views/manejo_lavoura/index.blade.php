<x-layout title="Manejos Lavouras">
    <a href="{{route('home.index')}}" class="btn btn-dark my-3 pr">Home</a>
    <a href="{{route('manejo_lavoura.create')}}" class="btn btn-dark my-3">Novo Manejo</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">{{ $mensagemSucesso }}</div>
    @endisset
    <ul class="list-group">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Data/hora ini</th>
                    <th scope="col">Data/hora fim</th>
                    <th scope="col">Horas Totais</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Usuario</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($manejos_lavouras as $manejo_lavoura)
                    <tr><!--
                        <td><a href="{{ route('manejo_lavoura.edit', $manejo_lavoura->id ) }}" class="text-decoration-none text-dark">{{ $manejo_lavoura->data_hora_ini }}</a></td>
                        <td><a href="{{ route('manejo_lavoura.edit', $manejo_lavoura->id) }}" class="text-decoration-none text-dark">{{ $manejo_lavoura->data_hora_fim }}</a></td>
                        <td><a href="{{ route('manejo_lavoura.edit', $manejo_lavoura->id) }}" class="text-decoration-none text-dark">{{ $manejo_lavoura->horas_totais }}</a></td>
                        <td><a href="{{ route('manejo_lavoura.edit', $manejo_lavoura->id) }}" class="text-decoration-none text-dark">{{ $manejo_lavoura->descricao }}</a></td>
                        <td><a href="{{ route('manejo_lavoura.edit', $manejo_lavoura->id) }}" class="text-decoration-none text-dark">{{ $manejo_lavoura->id }}</a></td>-->

                        <td>{{ $manejo_lavoura->data_hora_ini }}</td>
                        <td>{{ $manejo_lavoura->data_hora_fim }}</td>
                        <td>{{ $manejo_lavoura->horas_totais }}</td>
                        <td>{{ $manejo_lavoura->descricao }}</td>
                        <td>{{ $manejo_lavoura->id }}</td>
                        
                    </tr>
                @endforeach

                </tbody>
            </table>
    </ul>
</x-layout>



