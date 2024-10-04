<form action="{{$action}}" method="post">
    @csrf
    @isset($datanascimento)
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
value="{{ old('data_nascimento', $datanascimento ?? '') }}" required>


<label for="mae" class="form-label">Mãe</label>
<select id="mae" name="mae" class="form-control">
    <option value="">Selecione a Mãe do Terneiro</option>
    @foreach ($gados as $gadoFemea)
        <option value="{{ $gadoFemea->id_gado }}" 
            {{ (old('mae', isset($mae) ? $mae : '') == $gadoFemea->id_gado) ? 'selected' : '' }}>
            {{ $gadoFemea->gado_nome }}
        </option>
    @endforeach
</select>

        
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
