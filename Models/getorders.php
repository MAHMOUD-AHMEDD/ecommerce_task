<?php
include_once '.\helpers\connecttodb.php';
function get_orders()
{
    $con=connecttodb();
    $data=$con->query("SELECT * FROM orders ");
    return $data->fetchAll();
}
function get_orders_des()
{
    $con=connecttodb();
    $data=$con->query("SELECT * FROM orders ORDER BY time_ordered DESC ");
    return $data->fetchAll();
}
function get_orders_asc()
{
    $con=connecttodb();
    $data=$con->query("SELECT * FROM orders ORDER BY time_ordered ASC ");
    return $data->fetchAll();
}
