<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
            //Uma sessão autenticada será iniciada para o usuário

            return view('home');

        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->onlyInput('email');
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
        return view('welcome');
    }
}
