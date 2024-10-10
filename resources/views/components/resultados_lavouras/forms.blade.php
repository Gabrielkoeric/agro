<form action="{{$action}}" method="post">
    @csrf
    @isset($datanascimento)
        @method('PUT')
    @endisset

    <div class="mb-3">

        <label for="descricao" class=form-label>Descrição:</label>
        <input type="text" id="descricao" name="descricao" class="form-control" @isset($descricao) value="{{$descricao}}" @endisset>

        <label for="uni" class=form-label>Valor Unitario:</label>
        <input type="text" id="uni" name="uni" class="form-control" @isset($uni) value="{{$uni}}" @endisset>

        <label for="quant" class=form-label>Quantidade:</label>
        <input type="text" id="quant" name="quant" class="form-control" @isset($quant) value="{{$quant}}" @endisset>

        <div class="form-group mt-3">
            <label for="tipo_operacao" class="form-label">Tipo de Operação:</label>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="tipo_operacao" name="tipo_operacao" value="1" @if(isset($tipo_operacao) && $tipo_operacao == 1) checked @endif>
                <label class="form-check-label" for="tipo_operacao" id="tipo_operacao_label">
                    @if(isset($tipo_operacao) && $tipo_operacao == 1)
                        Venda
                    @else
                        Compra
                    @endif
                </label>
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{route('resultados_lavouras.index')}}" class="btn btn-primary">Cancelar</a>
</form>

<script>
    // JavaScript para alterar o texto do label ao mudar o switch
    document.getElementById('tipo_operacao').addEventListener('change', function() {
        let label = document.getElementById('tipo_operacao_label');
        if (this.checked) {
            label.textContent = 'Venda';
        } else {
            label.textContent = 'Compra';
        }
    });
</script>
