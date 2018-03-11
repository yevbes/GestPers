<?php
/**
 * Created by PhpStorm.
 * User: Yevgeniy Bespal
 * Date: 14/11/2017
 * Time: 23:11
 */

require_once "config.php";

$connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['user'],
    $config['db']['pass'],
    $config['db']['db_name']
);

if ($connection == false)
{
    echo 'No se ha podido establcer la conexion con la base de datos!<br>';
    echo mysqli_connect_error();
    exit();
}

