<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Produtos</title>
</head>
<body>
    <form action="" method="get">
        <label for="nome">Nome:</label>
        <input type="text" value="nome"><br><br>

        <label for="descricao">Descrição:</label>
        <input type="text" value="descricao"><br><br>

        <label for="preco">Preço:</label>
        <input type="text" value="preco"><br><br>

   
            <?php
                    <form action="form_inserir_produtos.php">
                <select name="exibir_categorias">

                
                    $pdo = new PDO("sqlite:estoque.db");
                    $query_select_categorias = "SELECT * FROM categorias";
                    $categorias = $pdo->query($query_select_categorias);
                    foreach ($categorias as $categoria){
                        echo "<option value=\"".$categoria["id"]."\">.$categoria["nome"]."</option>";"
                }
                    </form>
                </select>
                <button type="submit">Enviar</button>
            ?>
            <option value=""></option>
       <!--</select>-->
    </form>
</body>
</html>