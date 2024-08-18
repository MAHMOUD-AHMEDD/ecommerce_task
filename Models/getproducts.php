<?php
include_once '.\helpers\connecttodb.php';
function get_products()
{
    $con=connecttodb();
    $data=$con->query("SELECT * FROM products ");
    return $data->fetchAll();
}
function get_products_des()
{
    $con=connecttodb();
    $data=$con->query("SELECT * FROM products ORDER BY price DESC ");
    return $data->fetchAll();
}
function get_products_asc()
{
    $con=connecttodb();
    $data=$con->query("SELECT * FROM products ORDER BY price ASC ");
    return $data->fetchAll();
}
