<?php
include_once '.\helpers\connecttodb.php';
function get_suppliers()
{
    $con=connecttodb();
    $data=$con->query("SELECT * FROM suppliers ");
    return $data->fetchAll();
}
function get_suppliers_des()
{
    $con=connecttodb();
    $data=$con->query("SELECT * FROM suppliers ORDER BY id DESC ");
    return $data->fetchAll();
}
function get_suppliers_asc()
{
    $con=connecttodb();
    $data=$con->query("SELECT * FROM suppliers ORDER BY id ASC ");
    return $data->fetchAll();
}
