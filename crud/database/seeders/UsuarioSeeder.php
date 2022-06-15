<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => 'Ygor K',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ];
        if(User::Where('email', '=', $dados['email'])->count()){
            $usuario = User::Where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "usuario criado!";
        }else{
            User::create($dados);
            echo "usuario criado!";
        }

    }
}
