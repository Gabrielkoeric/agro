<form action="{{$action}}" method="post">
    @csrf
    @isset($nome)
        @method('PUT')
    @endisset

    <div class="mb-3">

        <label for="brinco" class="form-label">Brinco:</label>
        <input type="text" id="brinco" name="brinco" class="form-control" 
            @isset($brinco) value="{{$brinco}}" @endisset 
            minlength="6" maxlength="6" pattern="\d{6}">
        <small class="form-text text-muted">Se preenchido, o brinco deve ter exatamente 6 dígitos numéricos.</small><br>

        <label for="nome" class=form-label>Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control" @isset($nome) value="{{$nome}}" @endisset>

        <label for="data_nascimento" class="form-label">Data Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" class="form-control"
        @isset($data_nascimento) value="{{$data_nascimento}}" @endisset required>

        <label for="mae" class=form-label>Mãe</label>
        <select id="mae" name="mae" class="form-control" required>
            @if(!isset($maeAtual))
            <option value="">Selecione a Mãe do Terneiro</option>
            @endif
            @if(isset($maeAtual))
                <option value="{{ $maeAtual->id_gado }}">{{ $maeAtual->gado_nome }}</option>
            @endif
            @foreach ($gados as $gado)

                    @if (isset($maeAtual))
                        @if ($gado->id_gado <> $maeAtual->id_gado)
                            <option value="{{ $gado->id_gado }}">{{ $gado->gado_nome }}</option>
                        @endif
                    @else
                        <option value="{{ $gado->id_gado }}">{{ $gado->gado_nome }}</option>
                    @endif
            @endforeach
        </select >
        
        <label for="sexo" class="form-label">Sexo</label>
        <select id="sexo" name="sexo" class="form-control" required>
            <option value="">Selecione o Sexo do Terneiro</option>
            <option value="M" @if(isset($sexo) && $sexo == 'M') selected @endif>Macho</option>
            <option value="F" @if(isset($sexo) && $sexo == 'F') selected @endif>Fêmea</option>
        </select>

        <div class="form-check mt-3">
            <input type="checkbox" id="ativo" name="ativo" class="form-check-input" value="1" @if(isset($ativo) && $ativo == 1) checked @endif>
            <label class="form-check-label" for="ativo">Ativo</label>
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{route('gado.index')}}" class="btn btn-primary">Cancelar</a>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</form>
