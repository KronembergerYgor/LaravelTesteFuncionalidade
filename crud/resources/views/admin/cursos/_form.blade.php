<div class="input-field">
    <label for="">Título Curso</label>
    <input type="text" name="titulo" value="{{ isset($registros->titulo) == 1 ? $registros->titulo : '' }}">
</div>

<div class="input-field">
    <label for="">Descrição Curso</label>
    <input type="text" name="descricao" value="{{ isset($registros->descricao) == 1 ? $registros->descricao : '' }}">
</div>

<div class="input-field">
    <label for="">Valor Curso</label>
    <input type="text" name="valor" value="{{ isset($registros->valor) == 1 ? $registros->valor : '' }}">
</div>

<div class="input-field file-field">
    <div class='waves-effect waves-light btn-small orange lighten-2'>
        <span>imagem</span>
        <input type="file" name="imagem" value="{{ isset($registros->imagem) == 1 ? $registros->imagem : '' }}" >
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Selecione o arquivo" disabled>
      </div>
</div>

@if(isset($registros->imagem) == 1)

    <div class="input-field">
        <img style='box-shadow:0 3px 3px 0 rgba(0,0,0,0.14),0 1px 7px 0 rgba(0,0,0,0.12),0 3px 1px -1px rgba(0,0,0,0.2)' width="150" src="{{asset($registros->imagem)}}" alt="">
    </div>

@endif

<br>

<div class="input-field">
    <p>
    <label>
        
        <input type="checkbox" name="publicado" {{ isset($registros->publicado) && $registros->publicado == 'sim' ? 'checked' : '' }} value="true"/>
        <span>Deseja publicar?</span>
    </label>
    </p>
</div>

<br>




