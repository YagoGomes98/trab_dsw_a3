<?php
    $action = "inserir";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandas</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" >
</head>
<body>

    <?php  require_once "menu.php"; ?>

    <h1>Bem-vindo a visualização de bandas musicais - Bandas</h1>

    

<form method="POST" action="salvarDetalhes.php?<?php echo $action; ?>">
    <label for="txtNome">Nome:</label>
    <input type="text" name="txtNome" required />
    <label for="txtGenero">Gênero:</label>
    <input type="text" name="txtGenero" required />
    
    <br>
    <input type="submit" value="Salvar" />
    <input type="reset" value="Limpar" />
</form>

<hr>

    <table id="tbl_detalhesdef">
        
        <tr>
            <th>Código</th>    
            <th>Nome</th>
            <th>Gênero</th>
            
        </tr>
        <?php
            include_once 'clsConexao.php';
            $query = "SELECT * FROM detalhesdefinitivo";
            $result = Conexao::consultar( $query );

            while( $cat = mysqli_fetch_array($result)){
                echo '<tr>'; 
                echo '    <td>'.$cat['id'].'</td>';
                echo '    <td>'.$cat['nome'].'</td>';
                echo '    <td>'.$cat['genero'].'</td>;';
               // echo '    <td>'.$cat['dat'].'</td>;'; 
                echo '</tr>';
            }
        ?>
        
    </table>


    
</body>
</html>
