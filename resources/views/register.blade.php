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
        <h2>Crie sua conta</h2>

        <form action="{{ route('registerUser') }}" method='POST'>
        @csrf
            <!-- nome -->
            <div class='txt-login txt-login-1'>
                <div>
                    <span><ion-icon class='icon' name="mail-outline"></ion-icon></span>
                </div>
                <input class='txt-email' required autofocus type="text" name="nome" placeholder='Insira seu nome' maxLength="500"/>
            </div>

            <div class='txt-login txt-login-email'>
                <div>
                    <span><ion-icon class='icon' name="mail-outline"></ion-icon></span>
                </div>
                <input class='txt-email' required autofocus type="text" name="email" placeholder='Insira seu email' maxLength="500"/>
            </div>

            <!-- senha -->
            <div class='txt-login txt-login-2'>
                <div>
                    <span><ion-icon class='icon' name="lock-closed-outline"></ion-icon></span>
                </div>
                <input class='txt-password' type="password" required name="password" placeholder='Insira sua senha' maxLength="500"/>
                <span class='eye-password'><ion-icon name="eye-outline"></ion-icon></span>
            </div>

          
            <input class='button-submit' type="submit" value="Cadastrar" />                 
        </form>
    </div>
</body>
</html>
