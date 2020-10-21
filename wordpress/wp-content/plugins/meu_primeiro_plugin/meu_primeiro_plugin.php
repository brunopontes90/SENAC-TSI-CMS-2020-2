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

 add_filter('login_errors', 'altera_msg_login');

 function altera_msg_login(){

     return 'Credenciais inválidas';

 }