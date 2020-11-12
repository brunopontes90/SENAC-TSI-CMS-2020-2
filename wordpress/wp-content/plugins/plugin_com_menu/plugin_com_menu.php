<?php

/**
 * Plugin Name: Plug-in com Menu
 * Plugin URI: https://sp.senac.br
 * Description: Este é um lindo plug-in que mostra como o menu  do admin do WP
 * Version: 0.0.1
 * Author: Bruno Pontes
 * Author URI: https://github.com/brunopontes90/SENAC-TSI-CMS-2020-2
 * License: CC BY
 */

 add_action('admin_init', 'set_configs');
 
 function set_configs(){

    // configs-exemplo = nome do grupo de opções
    // api-token = nome do parametro
    register_setting('configs-exemplo', 'api-token');
    register_setting('configs-exemplo', 'api-url');

 }

 add_action('admin_menu','menu_do_meu_plugin');


 function menu_do_meu_plugin(){

    /* EXEMPLO PARA CRIAR ITEM NO PRIMEIRO NIVEL DO MENU
     add_menu_page('configurações do Meu Plug-in', 
                    'Meu plugin', //NOME DO PLUGIN
                    'administrator', 
                    'meu-plugin-config',
                    'abre_configuracoes',
                    'dashicons-admin-generic');
*/

// PLUG-IN DENTRO DE SETTINGS
add_submenu_page('options-general.php', //APARECER DENTRO DO SETTIGNS
                'configurações do Meu Plug-in', 
                'Meu-plugin', //NOME DO PLUG-IN
                'administrator', // QUEM PODE ALTERAR
                'meu-plugin-config',
                'abre_configuracoes'); // NOME DA FUNÇÃO
 }

function abre_configuracoes(){
    require 'plugin_com_menu_tpl.php';
}