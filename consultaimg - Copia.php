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

    
</style>

</style>
</head>

<body>

<h2>Tabela de Cadastro </h2>

     
<form name="cons" action=""  method="post">
    
    <fieldset>  
        <legend><b>Consultar livros</b></legend>
    <p>Formulário de Consulta: <input type="number" name="imagem"></p>

    <p>
        <input type="submit" name="procurar" value="Procurar"> 
    </p>
   </fieldset>
</form>

</body>
</html>
<?php 
    if (isset($_POST["procurar"])){
        $conexao=mysqli_Connect("localhost", "root","","2tib");
        $img1=$_POST['imagem'];
        $SQL="SELECT * FROM imagens where idimagem='$img1'";
        $result=mysqli_query($conexao,$SQL);
        while($Linha=mysqli_Fetch_array($result)){
            echo "imagem: ".$Linha['idimagem']."<br>";
            echo $Linha['endereco']."<br>";
            echo $Linha['descricao']."<br>";
            echo "<img  src='imagem/".$Linha['endereco']."'>";

        } 

    }
    
 
    
?>

