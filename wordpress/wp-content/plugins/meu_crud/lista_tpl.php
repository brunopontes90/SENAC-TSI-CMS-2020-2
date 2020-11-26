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

        <?php 
            if(isset($msg_alterar)){
                echo $msg_alterar;
            }elseif(isset($erro_alterar)){
                echo $erro_alterar;
            }
            if(isset($msg_apagar)){
                echo $msg_apagar;
            }

        ?>

            <table border="1" width="50%">
                <tr>
                    <td>Nome</td>
                    <td>Whatsapp</td>
                    <td></td>
                    <td></td>
                </tr>
                    <?php
                    
                        foreach($contatos as $key => $value){

                            echo "<tr>
                                    <td>{$value->nome}</td>
                                    <td>{$value->whatsapp}</td>
                                    <td><a href='?page={$_GET['page']}&apagar={$value->id}'>Apagar</a></td>
                                    <td><a href='?page={$_GET['page']}&editar_form={$value->id}'>Editar</a></td>
                                </tr>";
                        }
                    
                    ?>
                    <tr>
                        <td><input type="text" name="nome" placeholder="Nome"></td>
                        <td><input type="text" name="whatsapp" placeholder="Whatsapp"></td>
                        <td></td>
                        <td><?php submit_button('Gravar'); ?></td>
                        
                    </tr>
                </tr>
            </table>

        </form>

    </body>
</html>