<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></src=>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <title>Meu Plug-in</title>
    </head>
    <body>
        <div class="wrap">
        
            <h1 class='mt-3 font-weight-bold'>Configurações do meu plug-in</h1>
            
            <!-- option.php já esxiste no WP -->
            <form method="post" action="options.php">
                
                <?php
                
                    settings_fields('configs-exemplo');
                    do_settings_sections('configs-exemplo');  //faz as sessoes das config     
                ?>


                <div class='mt-2'>
                    <label for="api-token">Token da API</label>
                    <input type="text" id="api-token" name="api-token" value="<?php echo get_option('api-token')?>">
                </div>

                <div class='mt-2'>
                    <label for="api-url">URL da API</label>
                    <input type="text" id="api-url" name="api-url" value="<?php echo get_option('api-url')?>">
                </div>
                
                <?php
                // cria o botão submit (função do WP)
                submit_button();        
                
                ?>
            </form>
        </div>
    </body>
</html>

