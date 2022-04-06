<html>

<head>
<title>Modelo Formulário</title>  
<meta charset="utf-8">  
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

</style>
</head>

<body>

<h2>Tabela de Cadastro </h2>

     
<form method="post">
    
    <fieldset>  
        <legend><b>Formulário</b></legend>
    <p>Código: <input type="text" name="codlivro"></p>
  
    <p>Nome do livro: <input type="text" name="nome"></p>

    <p>Autor: <input type="text" name="autor"></p>

    <p>Tipo: <input type="text" name="tipo"></p>

    <p>Editora: <input type="text" name="editora"></p>

    <p>Ano de lançamento: <input type="number" name="anolanc"></p>
 
    <p>
        <input type="submit" name="submit" value="Submit"> 
    </p>
   </fieldset>
</form>

</body>
</html>
<?php 
    if (isset($_POST["submit"])){

        $conexao=mysqli_Connect("localhost", "root","","2tib");

        $cod=$_POST["codlivro"];
        $nome=$_POST["nome"];
        $autor=$_POST["autor"];
        $tipo=$_POST["tipo"];
        $editora=$_POST["editora"];
        $anolanc=$_POST["anolanc"];

        $sql="INSERT INTO livro (codlivro, nome, autor, tipo, editora, anoLanc) VALUES ('$cod','$nome','$autor','$tipo',$editora '$anolanc')";

        $resultado=mysqli_query($conexao,$sql);

    }





?>

