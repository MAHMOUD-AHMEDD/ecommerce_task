<?php
function connecttodb()
{
    $info='mysql:host=localhost;dbname=depi_task';
    $username='root';
    $password='';
    $con=new PDO($info,$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $con;
}