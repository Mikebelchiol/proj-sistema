<?php
session_start();
    require_once("servidor.php");
    if (!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);      
    }
?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario de Cadastro</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Righteous&family=Sarala:wght@700&display=swap');
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Righteous', cursive;
        }
         body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #7cb3fc;
        }

        .container {
            width: 85%;
            height: 85vh;
            display: flex;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, .212) ;
        }

        .form-image {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #5ba1fc;
            padding: 1rem;
        }

        .from-image img {
            width: 30rem;
        }

        .form {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #fff;
            padding: 3rem;
        }

        .form-header {
            margin-bottom: 1rem;
            display: flex;
            justify-content: space-between;
        }

        
.form-header h1::after {
    content: '';
    display: block;
    width: 6rem;
    height: 0.3rem;
    background-color: #1d7cf8;
    margin: 0 auto;
    position: absolute;
    border-radius: 5px;
}

.input-group {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 1rem 0;
}

.input-box {
    display: flex;
    flex-direction: column;

}

.input-box input {
    margin: 0.6rem 0;
    padding: 0.8rem 1.2rem;
    border: none;
    border-radius: 10px;
    box-shadow: 1px 1px 6px #0000001c;
    transition: background .3s;
}

.input-box input:hover {
    background-color: #99999975;
}

.input-box input:focus-visible {
    outline: 1px solid #1d7cf8;
}

.input-box label,
.gender-title h6 {
    font-size: 15px;
    font-weight: 600;
    color: #000000c0;
}

.input-box input::placeholder {
    color: #000000be;
}

.turno-shift{
    display: flex;
    justify-content: space-between;
    margin-top: 0.62rem;
    padding: 0 0.5rem;
}

.turno-inputs {
    display: flex;
    align-items: center;
}


.turno-input input {
    margin-right: 0.35rem; 
}

.turno-input label {
    font-size: 0.81rem;
    font-weight: 800;
    color: #000000c0;
}

.cadastrar-button button {
    width: 100%;
    margin-top: 1rem;
    border: none;
    background-color: #0651b3;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
    transition: background .3s;
}

.cadastrar-button button:hover {
    background-color: #04316b;
}

.cadastrar-button button a {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}
    </style>
</head>

<body>
    <div class="container">
       <div class="form-image">
         <img src="undraw_science_re_mnnr (2).svg" height="330px">
       </div>

       <div class="form">
         <form action="cadastrar.php" method="get" accept-charset="utf-8">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre o produto</h1>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="prioridade">Prioridade</label>
                    <input type="text" name="prioridade" placeholder=" A, B ou C " required>
                </div>
                <div class="input-box">
                    <label for="reator">Reator</label>
                    <input type="text" name="reator" placeholder="N° do Reator" required>
                </div>
                <div class="input-box">
                    <label for="produto">Produto</label>
                    <input type="text" name="produto"  placeholder="Nome do produto" required>
                </div>
                <div class="input-box">
                    <label for="lote">Lote</label>
                    <input type="text"  name="lote"  placeholder="N° do Lote" required>
                </div>
                <div class="input-box">
                    <label for="roteiro">Roteiro</label>
                    <input type="text" name="roteiro"  placeholder="N° do Roteiro" required>
                </div>
                <div class="input-box">
                    <label for="op">OP</label>
                    <input type="text" name="op" placeholder="N° da OP" required>
                </div>
                <div class="input-box">
                    <label for="quantidade">Quantidade(Kg)</label>
                    <input type="text" name="quantidade" placeholder="00000000000..." required>
                </div>
                <div class="input-box">
                    <label for="supervisor de turno">Supervisor de turno</label>
                    <input type="text" name="supervisor" placeholder="Supervisor de turno" required>
                </div>
                <div class="input-box">
                    <label for="turno">Turno</label>
                    <input type="text" name="turno" placeholder="Turno A ou B" required>
                </div>
            </div>
           
            <div class="cadastrar-button">
                <button name="cadastrar">Cadastrar</button>
            </div>
        </form>
       </div>
    </div>
</body>

</html>