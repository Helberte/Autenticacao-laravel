<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Link redefinição</title>
</head>
<body>
  <form action="{{ route('emailenvio') }}" method="POST">
    <input type="email" name="email" required value="{{ old('email') }}" maxlength="500" placeholder="Escreva seu email" autofocus>

    <input type="submit" value="Enviar email">
  </form>
</body>
</html>