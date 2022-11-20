<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomePage</title>
</head>
<body>
  <h1>Você entrou no sistema</h1>

  @auth
    <h2>Eu estou autenticado</h2>
    
    <a href="{{ route('sair') }}">Sair</a>
    
  @endauth
</body>
</html>