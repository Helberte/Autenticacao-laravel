<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class Autenticacao extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function authUser(Request $request){
        $credenciais = $request->validate([
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required','min:8']
        ]);
        //https://laravel.com/docs/9.x/validation#rule-min
        // documentação, este metodo validade valida as colunas de acordo com a regra passada por array

        if(Auth::attempt($credenciais)){ // verifica na tabela do banco de dados se existe este email e esta senha
        // caso exista, retornará true

            $request->session()->regenerate();
            // Uma sessão autenticada será iniciada para o usuário

            // a tabela do banco e os campos são pegados automaticamente a partir do arquivo
            // config/auth.php

            // return redirect('/home');
            // redirecionando para a rota /home

            //redirecionando para rota nomeada comparametro
            //return redirect()->route('paginahome', ['id' => 1]);

            //redirecionando para rota nomeada sem comparametro
            return redirect()->route('paginahome');

        }

        // redireciona o usuário para a página anterior
        return back()->withErrors([
            'user_nao_encontrado' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->withInput(); // permite salvar os dados que estavam antes, que o usuário tinha preenchido

        // documentação, redirecionamento
        // https://laravel.com/docs/9.x/redirects
    }
    public function home(){
        return view('home');
    }
    public function register(){
        return view('register');
    }

    public function createUser(Request $request){
        $usuario = new User;

        $usuario->name = $request->nome;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);

        $usuario->save();
        return redirect()->route('homelogin')->with('status','Conta criada com sucesso.');
    }
}
