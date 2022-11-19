<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="./css/style.css" rel="stylesheet">

    <!-- Icones -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>
</head>
<body>
    <div class='box-login'>
        <h2>Conecte-se</h2>

        <form action="{{ route('login') }}" method='POST'>
        @csrf
            <!-- email -->
            <div class='txt-login txt-login-1'>
                <div>
                    <span><ion-icon class='icon' name="mail-outline"></ion-icon></span>
                </div>
                <input class='txt-email' autofocus type="text" name="email" placeholder='Insira seu email' maxLength="500"/>
            </div>

            <!-- senha -->
            <div class='txt-login txt-login-2'>
                <div>
                    <span><ion-icon class='icon' name="lock-closed-outline"></ion-icon></span>
                </div>
                <input class='txt-password' type="password" name="password" placeholder='Insira sua senha' maxLength="500"/>
                <span class='eye-password'><ion-icon name="eye-outline"></ion-icon></span>
            </div>

            <!-- CONTINUAR https://laravel.com/docs/9.x/validation -->
            
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <button class='forgot-password'>Não consegue fazer login?</button>

            <input class='button-submit' type="submit" value="Conecte-se" />

            <div class='create-accout'>
                <p>Não tem uma conta?</p>

                <button><a href="/register">Crie</a></button>
                
            </div>        
        </form>
    </div>
</body>
</html>
