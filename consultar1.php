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

     
<form name="cons" action=""  method="post">
    
    <fieldset>  
        <legend><b>Consultar livros</b></legend>
    <p>Formulário de Consulta: <input type="text" name="nomea"></p>

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
        $nomea=$_POST['nomea'];
        //colocar a varável do lado esquerdo do igual
        $SQL="SELECT * FROM amigos where nome='$nomea'";
        $result=mysqli_query($conexao,$SQL);
        while($Linha=mysqli_Fetch_array($result)){
            //colocar variável dentro da chave
            echo "nome do amigo: ".$Linha['nome']."<br>";
            echo "endereço do amigo: ".$Linha['endereco']."<br>";
            echo "código do amigo: ".$Linha['codigo']."<br>";
            echo "celular do amigo: ".$Linha['celula']."<br>";
            echo "apelido do amigo: ".$Linha['apelido']."<br>";
        } 
    }
 
    
?>

