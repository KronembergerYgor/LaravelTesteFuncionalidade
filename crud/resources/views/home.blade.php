@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')

<div class="container">
    <div class="row">
        <h3 class="center-align" style="text-shadow:3px 2px rgba(0,0,0,0.14)">Lista de cursos</h3>        
@foreach($cursos as $curso)

        <div class="col s12 m4">
        <div class="card">
            <div class="card-image">
            <img  src="{{ asset($curso->imagem) }}">
            </div>
            <div class="card-content">
                <h4 class="card-title">{{$curso->titulo}}</h4>
            <p>{{$curso->descricao}}</p>
            </div>
            <div class="card-action">
            <a href="#">Ver mais...</a>
            </div>
        </div>
        </div>
  
  @endforeach
        
    </div>
    <div class="row" align="center">
        <ul class="pagination">
            <li class="active">{{$cursos->links()}}</li>
        </ul>
      
    </div>
</div>

@endsection