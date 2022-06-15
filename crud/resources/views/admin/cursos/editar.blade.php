@extends('layout.site')

@section('titulo','Adicionar Curso')

@section('conteudo')

<div class='container'>
    <div class='row center-align'>
        <h3 style="text-shadow:3px 2px rgba(0,0,0,0.14)">Editar de curso</h3>
    </div>

    <div class='card-panel row'>
        <div class='row'>
            <form action="{{ route('admin.cursos.atualizar', $registros->id) }}" method="post"  class="col s12 row" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('admin.cursos._form')

                <div class="right-align">
                    <button type="submit" class='waves-effect waves-light btn-small orange darken-2'>Salvar</button>
                </div>
            </form>

         </div>
    </div>
</div>




@endsection