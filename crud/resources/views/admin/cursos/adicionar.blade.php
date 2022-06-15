@extends('layout.site')

@section('titulo','Adicionar Curso')

@section('conteudo')

    <div class='container'>
        <div class='row center-align'>
            <h3 style="text-shadow:3px 2px rgba(0,0,0,0.14)">Cadastro de cursos</h3>
        </div>

        <div class='card-panel row'>
            <div class='row'>
                <form action="{{ route('admin.cursos.salvar') }}" method="post"  class="col s12 row" enctype="multipart/form-data" >
                    {{ csrf_field() }}

                    @include('admin.cursos._form')

                    <div class="right-align">
                        <button type="submit" class='waves-effect waves-light btn-small orange darken-2'>Cadastrar</button>
                    </div>
                </form>

             </div>
        </div>
    </div>

@endsection