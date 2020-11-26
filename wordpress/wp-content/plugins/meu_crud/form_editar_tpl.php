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
           
        <tr>
            <td><input type="text" name="nome" value="<?php echo $contato[0]->nome; ?>"></td>
            <td><input type="text" name="whatsapp" value="<?php echo $contato[0]->whatsapp; ?>"></td>
            <td>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="alterar" value="1">
                <?php submit_button('Alterar'); ?>
            </td>
                
            </tr>
        </tr>
        </table>

    </form>

</body>
</html>