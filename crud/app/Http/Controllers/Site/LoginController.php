<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Auth;

class LoginController extends Controller
{
    public function index(){
        return view("login.index");
    }

    public function entrar(Request $request){

        $dados = $request->all();
        
        if(Auth::attempt(['email'=> $dados["usuario"], "password"=>$dados["senha"]])){
            return redirect()->route("admin.cursos");
        }

        return redirect()->route('site.login');
        
    }

    public function sair(Request $request){

        Auth::logout();

        return redirect()->route('home.index');
    }
}
