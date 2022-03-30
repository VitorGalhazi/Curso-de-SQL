<html>
    <head>
    <title>Formulário de Cadastro</title>
    <style>
    Body {
        font-family: cursive, sans-serif;
        width: auto;
        height: auto;
        background-color: coral;
        padding: 25px;
        font-size: 20px;
    }    
    
    p { 
        color: blue;
    }
    img {
        width: 20px;
        height: 20px;
    }
    </style>
    </head>
    <body>
    <form name='login' action="" method="post">
    <h1> <center>Tela de Cadastro</center></h1>

    <br> <br> <br> <br>
    Nome: <input type="text" name="nome">
    E-mail: <input type='email' name="email">
    Senha: <input type='password' name="senha">
    Confirmar senha: <input type="password" name="Csenha"> 

    <br> <br>

    <input type="submit" name="salvar" value="salvar">

    </form>

</body>
</html>
<?php

if  (isset($_POST["salvar"])){
        

    $conexao=mysqli_Connect('localhost',"root","","2tib");

    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    $Csenha=$_POST["Csenha"];

    if($senha == $Csenha){
    $sql="INSERT INTO logar(nome, email,senha) 
                    VALUES ('$nome','$email', '$senha')";
    
    $resultado=mysqli_query($conexao,$sql);
    }else{
        echo "Senhas não  conferem";
    }
   
}
?>

