<form action="{{$action}}" method="post">
    @csrf
    @isset($nome)
        @method('PUT')
    @endisset

    <div class="mb-3">
        <label for="ini" class=form-label>Data/Hora Inicio:</label>
        <input type="datetime-local" id="ini" name="ini" class="form-control" @isset($ini) value="{{$ini}}" @endisset required>

        <label for="fim" class=form-label>Data/Hora Fim:</label>
        <input type="datetime-local" id="fim" name="fim" class="form-control" @isset($fim) value="{{$fim}}" @endisset>

        <label for="descricao" class=form-label>Descricao:</label>
        <input type="text" id="descricao" name="descricao" class="form-control" @isset($descricao) value="{{$descricao}}" @endisset required>

        <label for="usuario" class=form-label>Usuario</label>
        <select id="usuario" name="usuario" class="form-control" required>
            @if(!isset($usuarioAtual))
            <option value="">Selecione o Usuario</option>
            @endif
            @if(isset($usuarioAtual))
                <option value="{{ $usuarioAtual->id }}">{{ $usuarioAtual->nome_completo }}</option>
            @endif
            @foreach ($usuarios as $usuario)

                    @if (isset($usuarioAtual))
                        @if ($usuario->id <> $usuarioAtual->id)
                            <option value="{{ $usuario->id }}">{{ $usuario->nome_completo }}</option>
                        @endif
                    @else
                        <option value="{{ $usuario->id }}">{{ $usuario->nome_completo }}</option>
                    @endif
            @endforeach
        </select >
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{route('manejo_lavoura.index')}}" class="btn btn-primary">Cancelar</a>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</form>
