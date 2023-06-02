<?php
    
if(isset($_POST['submit'])){
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    
    $result = mysqli_query($conexao, "INSERT INTO users(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco)
    VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
    

    if($result){
        echo "Registro inserido com sucesso.";
    } else {
        echo "Erro ao inserir o registro: " . mysqli_error($conexao);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            background-image: linear-gradient(to right, rgb(236, 204, 204), rgb(172, 139, 139));
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: antiquewhite;
            padding: 15px;
            border-radius: 15px;
            max-width: 20%;
        }
        fieldset{
            border: 3px solid gray;
        }
        legend{
            border: 1px solid gray;
            padding: 10px;
            text-align: center;
            background-color: gray;
            border-radius: 5px;
            color: white
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid black;
            outline: none;
            color: black;
            font-size: 13px;
            width: 100%;
            letter-spacing: 1px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(87, 81, 81), rgb(80, 58, 58) );
            color: white;
            width: 100%;
            border: 2px;
            padding: 10px;
            font-size: 13px;
            cursor: pointer;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="form.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome">Nome completo</label class="labelInput">
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email">Email</label class="labelInput">
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone">Telefone</label class="labelInput">
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de Nascimento</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>                    
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade">Cidade</label class="labelInput">
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado">Estado</label class="labelInput">
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco">Endereço</label class="labelInput">
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    
</body>
</html>