<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Exibir Categorias</title>
</head>
<body>
    <?php
        $pdo = new PDO("sqlite:estoque.db");
        $queryCategorias ="SELECT * FROM categorias";

        $categorias = $pdo->query($queryCategorias);

        echo"<table border=2>";
        echo"<tr>";
        echo"<th>id</th>";
        echo"<th>nome</th>";
        echo"<tr>";
        

        foreach($categorias as $categoria){
            echo"<td>".$categoria["id"]."</td>";
            echo"<tr>".$categoria["nome"]."</tr>";

            foreach($categorias as $categoria){
                echo"<td>".$categoria["id"]."</td>";
                echo"<tr>".$categoria["nome"]."</tr>";
    
            }
        }
        echo"</table>";
    ?>
</body>
</html>