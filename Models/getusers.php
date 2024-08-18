<?php
include_once '.\helpers\connecttodb.php';
function get_users()
{
    $con=connecttodb();
    $data=$con->query("SELECT * FROM users ");
    return $data->fetchAll();
}
function get_users_des()
{
    $con=connecttodb();
    $data=$con->query("SELECT * FROM users ORDER BY id DESC ");
    return $data->fetchAll();
}
function get_users_asc()
{
    $con=connecttodb();
    $data=$con->query("SELECT * FROM users ORDER BY id ASC ");
    return $data->fetchAll();
}
