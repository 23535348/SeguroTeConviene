<?php
/**
 * Created by PhpStorm.
 * User: dmillan
 * Date: 29/09/15
 * Time: 09:25 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'tucorreo@ gmail.com'; // correo sin espacio
$config['smtp_pass'] = 'tucontraseña';
$config['smtp_timeout'] = '7';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['mailtype'] = 'text'; // or html
$config['validation'] = TRUE; // bool whether to validate email or not