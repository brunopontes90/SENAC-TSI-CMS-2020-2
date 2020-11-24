<?php

/**
 * Plugin Name: Exemplo de CRUD na tela de configuração
 * Plugin URI: https://sp.senac.br
 * Description: Este é um lindo plug-in exemplo de CRUD na tela de configuração
 * Version: 0.0.1
 * Author: Bruno Pontes
 * Author URI: https://github.com/brunopontes90/SENAC-TSI-CMS-2020-2
 * License: CC BY
 */


if(!defined('WPINC')) exit; //FORMA DE SEGURANÇA PARA EVITAR CHAMAR O DIRETAMENTE

register_activation_hook(__FILE__, 'criar_tabela'); //__FILE__ NOME DO ARQUIVO ATUAL

function criar_tabela(){

    global $wpdb;

    //CRIA A TABELA AGENDA
    $wpdb->query("CREATE TABLE {$wpdb->prefix}agenda
                (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(255) NOT NULL,
                whatsapp BIGINT UNSIGNED NOT NULL)");

}

register_deactivation_hook(__FILE__, 'apagar_tabela');

function apagar_tabela(){
    
    global $wpdb;
    
    $wpdb->query("DROP TABLE {$wpdb->prefix}agenda");
}

add_action('admin_menu','crud_do_meu_plugin');


 function crud_do_meu_plugin(){

    //EXEMPLO PARA CRIAR ITEM NO PRIMEIRO NIVEL DO MENU
     add_menu_page('configurações do Meu Plug-in', 
                    'Meu CRUD', //NOME DO PLUGIN
                    'administrator', 
                    'meu-plugin-config',
                    'abre_configuracoes',
                    'dashicons-database');
}

function abre_configuracoes(){

    global $wpdb;

    // apagar
    if(isset($_GET['apagar'])){

        $id = preg_replace('/\D/', '', $_GET['apagar']); // pega os dados confiaveis

        $wpdb->query("DELETE FROM {$wpdb->prefix}agenda WHERE id = $id");

    }

    // gravar
    if(isset($_POST['submit'])){
        
        if($_POST['submit']=='Gravar'){

            $wpdb->query( $wpdb->prepare("  INSERT INTO {$wpdb->prefix}agenda 
                                                (nome, whatsapp)
                                            VALUES
                                                (%s, %d)",$_POST['nome'], $_POST['whatsapp'] ));
        }
    }

    // listar
    $contatos = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}agenda");

    require 'lista_tpl.php';
}