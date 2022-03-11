<html>
    <head>
    <title>Formulário de Cadastro</title>
    </head>
    <body>
    <form name='cadastro' action="" method="post">
    <h1> <center>Tela de Cadastro</center></h1>

    <br> <br> <br> <br>
    Código <input type="text" name="cod">
    Nome <input type="text" name="nome">
    Endereço <input type="text" name="ender">
    Número <input type='text' name="nume">
    Apelido <input type="text" name="apelido"> 

    <br> <br>

    <input type="submit" name="cadastrar" value="Cadastrar">

    </form>
</body>
</html>
<?php
    if  (isset($_POST["cadastrar"])){
        
        $conexao=mysqli_Connect('localhost',"root","","2tib");

        $cod=$_POST["cod"];
        $nome=$_POST["nome"];
        $ender=$_POST["ender"];
        $nume=$_POST["nume"];
        $apelido=$_POST["apelido"];
       
        $sql="INSERT INTO  amigos (codigo, nome, endereco,celula, apelido) VALUES ('$cod','$nome','$ender', '$nume', '$apelido')";
        
        $resultado=mysqli_query($conexao,$sql);
}

?>