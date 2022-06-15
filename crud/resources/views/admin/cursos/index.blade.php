@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
   
    <div class='container'>
        <div class='row center-align'>
            <h3 style="text-shadow:3px 2px rgba(0,0,0,0.14)">Lista de cursos</h3>        
        </div>

        <div class='row right-align'>
            <a href="{{ route('admin.cursos.adiconar') }}" style ='margin-bottom: 1%;' class="waves-effect waves-light btn-small orange lighten-2"><i class="material-icons left">add_box</i>Cadastrar cursos</a>
        </div>

        <div class='row'>
            <table class='striped center-align' style="box-shadow:0 3px 3px 0 rgba(0,0,0,0.14),0 1px 7px 0 rgba(0,0,0,0.12),0 3px 1px -1px rgba(0,0,0,0.2)">
                <thead class='white-text orange lighten-2'>
                    <th>id</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>imagem</th>
                    <th>Valor</th>
                    <th>Publicado</th>
                    <th>Ação</th>
                </thead>
                <tbody>
                    <!-- mode_edit -->
                    @foreach($cursos as $curso)
                        <tr>
                            <td>{{ $curso->id }}</td>
                            <td>{{ $curso->titulo }}</td>
                            <td>{{ $curso->descricao }}</td>
                            <td><img style="box-shadow:0 3px 3px 0 rgba(0,0,0,0.14),0 1px 7px 0 rgba(0,0,0,0.12),0 3px 1px -1px rgba(0,0,0,0.2)" width="40" src="{{ asset($curso->imagem) }}" alt=""></td>
                            <td>{{ $curso->valor }}</td>
                            <td>{{ $curso->publicado }}</td>
                            <td>
                                <a href="{{ route('admin.cursos.editar', $curso->id) }}" class="waves-effect waves-light btn-small green darken-1"><i class="material-icons">mode_edit</i></a>
                                <a href="{{ route('admin.cursos.deletar', $curso->id) }}" class="waves-effect waves-light btn-small red darken-2"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                    
                    @endforeach
                    
                </tbody>
                
            </table>
        
    </div>
    <div class='row'>
        <ul class="pagination white-text orange lighten-2">
            <li class="active">{{$cursos->links()}}</li>
        </ul>
    </div>

</div>

@endsection

