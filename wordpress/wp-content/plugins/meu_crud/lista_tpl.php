<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Crud</title>
</head>
<body class="wrap">
    <h1>Meu CRUD</h1>
    <br><br>

    <form method="post">

        <table border="1" width="50%">
        <tr>
            <td>Nome</td>
            <td>Whatsapp</td>
            <td></td>
        </tr>
            <?php
            
                foreach($contatos as $key => $value){

                    echo "<tr>
                            <td>{$value->nome}</td>
                            <td>{$value->whatsapp}</td>
                            <td><a href='?page={$_GET['page']}&apagar={$value->id}'>Apagar</a></td>
                            </tr>";
                }
            
            ?>
            <tr>
                <td><input type="text" name="nome" placeholder="Nome"></td>
                <td><input type="text" name="whatsapp" placeholder="Whatsapp"></td>
                <td><?php submit_button('Gravar'); ?></td>
                
            </tr>
        </tr>
        </table>

    </form>

</body>
</html>