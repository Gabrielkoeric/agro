<x-layout title="Resultados">
    <a href="{{route('home.index')}}" class="btn btn-dark my-3 pr">Home</a>
    <a href="{{route('resultados_lavouras.create')}}" class="btn btn-dark my-3">Novo Gasto</a>
    <a href="{{route('resultados_lavouras.create')}}" class="btn btn-dark my-3">Novo Lucro</a>
    <!--<a href="{{route('gado.create')}}" class="btn btn-dark my-3">Nova Compra</a>
    <a href="{{route('gado.create')}}" class="btn btn-dark my-3">Novo Venda</a>-->

    <ul class="list-group">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor Unitario</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor Total</th>
                   <!-- <th scope="col">Fornecedor</th>-->
                </tr>
                </thead>
                <tbody>
                @foreach ($gastos as $gasto)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gasto->descricao }}</td>
                        <td>{{ $gasto->valor_unitario }}</td>
                        <td>{{ $gasto->quantidade }}</td>
                        <td>{{ $gasto->valor_total }}</td>
                        <!--<td>{{ $gasto->fornecedor }}</td>-->

                        
                    </tr>
                @endforeach


                </tbody>
            </table>
            <h4 class="my-3">Saldo (Lucro/Prejuízo): R$ {{ number_format($saldo, 2, ',', '.') }}</h4>
    </ul>
</x-layout>
