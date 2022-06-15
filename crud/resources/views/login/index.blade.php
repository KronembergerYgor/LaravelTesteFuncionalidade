@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')

    <div class="container">
        <div class="row card-panel">
            <form action="{{ route('site.login.entrar') }}" method="post">
                {{csrf_field()}}
                
                <div class="input-field">
                    <input type="email" name='usuario' placeholder="Digite seu email">
                </div>

                <div class='input-field'>
                    <input type="password" name='senha' placeholder="Digite sua senha">
                </div>

                <button class='btn deep-orange'>Entrar</button>
                
            </form>

        </div>


    </div>




@endsection