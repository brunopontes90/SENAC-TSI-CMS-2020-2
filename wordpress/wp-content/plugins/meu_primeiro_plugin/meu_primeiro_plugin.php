<?php

/**
 * Plugin Name: Meu Primeiro Plug-in
 * Plugin URI: https://sp.senac.br
 * Description: Este é um lindo plug-in desenvolvido por mim
 * Version: 0.0.1
 * Author: Bruno Pontes
 * Author URI: https://github.com/brunopontes90/SENAC-TSI-CMS-2020-2
 * License: CC BY
 */

 //login_errors é o gancho
 add_filter('login_errors', 'altera_msg_login');

 function altera_msg_login(){

     return 'Credenciais inválidas';

 }

 add_action('wp_head', 'colocar_og_tags');
     function colocar_og_tags(){
        if(is_single()){

            $dados_do_post = get_post(get_the_ID());
               
            $nome_do_site = get_bloginfo();

            $titulo = $dados_do_post -> post_title;

            $resumo = $dados_do_post -> post_excerpt;

            echo "\n\n\n
                <meta property='og:title' content='". the_title() . "'>\n
                <meta property='og:site_name' content='". $nome_do_site . "'>\n
                <meta property='og:url' content='". get_permalink() . "'>\n
                <meta property='og:description' content='". get_the_ID()    . "'>\n
                \n\n\n";
        }
     }
 