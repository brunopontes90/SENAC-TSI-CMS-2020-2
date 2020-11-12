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