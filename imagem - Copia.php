<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>imagem</title>
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
        <form name="imagem" action="" method="post" enctype="multipart/form-data">

            idfoto:<input type="text" name="idfoto"><br>
            Descrição :<input type="text" name="descfoto"><br>

            <input type="file" name="imge" values="imagens">
            <br>
            <input type='submit' value='enviar' name="enviar">
            <br>
            <img src="imagem/imge">
        </form>
    </body>

</html>
<?php
    if (isset($_POST['enviar'])){
        $conexao=mysqli_connect("localhost", "root", "","2tib") ;

            var_dump($_FILES["imge"]);
            $endereco=$_FILES['imge']['name'];

            $idfoto=$_POST['idfoto'];
            $descfoto=$_POST['descfoto'];

            $sql="INSERT INTO imagens (idimagem,descricao,endereco) VALUES('$idfoto', '$descfoto','$endereco')";

            $teste= mysqli_query($conexao,$sql);
            $temp=$_FILES['imge']['tmp_name'];
            move_uploaded_file($temp, "imagem/$endereco");
    }

?>