<html>

<head>
<title>Modelo Formul�rio</title>  
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
    <p>Código: <input type="number" name="cod"></p>
  
    <p>Descrição: <input type="text" name="Descri"></p>

    <p>Quantidade: <input type="number" name="QIdade"></p>

    <p>Valor: <input type="number" name="valor"></p>
 
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

        $cod=$_POST["cod"];
        $descri=$_POST["Descri"];
        $qidade=$_POST["QIdade"];
        $Valor=$_POST["valor"];

        $sql="INSERT INTO produto (Codigo, Descri, Qidade, Valor) VALUES ('$cod','$descri','$qidade', '$Valor')";

        $resultado=mysqli_query($conexao,$sql);

    }





?>

