<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
<div class="form">
    <form action="logar.php" method="POST">
        <div class="form-header">
            <div class="title">
                <h1>Entrar</h1>
            </div>
        </div>
            <div class="input-box">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="input-box">
                <label for="password">Senha</label>
                <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
            </div>
            <div class="entrar-button">
                <button type="submit"><a>Entrar</a></button>
            </div>
        </div>        
    </form>
</div>
</body>

</html>