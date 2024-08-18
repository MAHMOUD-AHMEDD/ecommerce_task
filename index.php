<?php
//include_once 'helpers\connecttodb.php';
include_once 'Models\getusers.php';
include_once 'Models\getproducts.php';
include_once 'Models\getsuppliers.php';
include_once 'Models\getorders.php';
$products=get_products();
$users=get_users();
$suppliers=get_suppliers();
$orders=get_orders();
//$cnt=0;
//if($_SERVER['REQUEST_METHOD']=='POST'){
////    $cnt++;
//$products=get_products_des();
////echo $cnt;
//
//}
$access_product=['price','quantity','discount','Name'];
$access_users=['name','email','address','phone','type'];
$access_suppliers=['name','phone','email'];
$access_orders=['name','order_address','time_ordered'];


if($_SERVER['REQUEST_METHOD']=='POST'){
    $products=get_products_asc();
    $users=get_users_asc();
    $suppliers=get_suppliers_asc();
    $orders=get_orders_asc();
}



?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>database</title>
    </head>
    <body>
    <?php
    if(isset($products)&&sizeof($products)>0){
        ?>
            <h1 class="text-center text-primary">Products</h1>
        <table class="table table-hover table-bordered table-striped">
            <thead>
            <tr>
                <td>price</td>
                <td>quantity</td>
                <td>discount</td>
                <td>Name</td>
                <form method="post">
                <td><button class="btn btn-primary">sort</button></td>
                </form>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($products as $product){
            echo '<tr>';
                foreach ($access_product as $prod){
                    echo '<td>'.$product[$prod].'</td>';
                }
            echo '</tr>';
            }
            ?>
            </tbody>
        </table>


        <?php
            }
            else{
                echo '<p class="alert alert-danger">There is no data</p>';
            }
        ?>
<!--    -->
<!--    -->
    <br>
    <h1 class="text-center text-primary">Users</h1>
    <?php
    if(isset($users)&&sizeof($users)>0){
        ?>
        <table class="table table-hover table-bordered table-striped">
            <thead>
            <tr>
                <td>name</td>
                <td>email</td>
                <td>address</td>
                <td>phone</td>
                <td>type</td>
                <form method="post">
                    <td><button class="btn btn-primary">sort</button></td>
                </form>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($users as $product){
                echo '<tr>';
                foreach ($access_users as $prod){
                    echo '<td>'.$product[$prod].'</td>';
                }
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>


        <?php
    }
    else{
        echo '<p class="alert alert-danger">There is no data</p>';
    }
    ?>
<!--    -->
<!--    -->
    <br>
    <h1 class="text-center text-primary">Suppliers</h1>
    <?php
    if(isset($suppliers)&&sizeof($suppliers)>0){
        ?>
        <table class="table table-hover table-bordered table-striped">
            <thead>
            <tr>
                <td>name</td>
                <td>phone</td>
                <td>email</td>
                <form method="post">
                    <td><button class="btn btn-primary">sort</button></td>
                </form>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($suppliers as $product){
                echo '<tr>';
                foreach ($access_suppliers as $prod){
                    echo '<td>'.$product[$prod].'</td>';
                }
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>


        <?php
    }
    else{
        echo '<p class="alert alert-danger">There is no data</p>';
    }
    ?>
<!--    -->
<!--    -->
    <br>
    <h1 class="text-center text-primary">Orders</h1>
    <?php
    if(isset($orders)&&sizeof($orders)>0){
        ?>
        <table class="table table-hover table-bordered table-striped">
            <thead>
            <tr>
                <td>name</td>
                <td>order_address</td>
                <td>time_ordered</td>
                <form method="post">
                    <td><button class="btn btn-primary">sort</button></td>
                </form>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($orders as $product){
                echo '<tr>';
                foreach ($access_orders as $prod){
                    echo '<td>'.$product[$prod].'</td>';
                }
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>


        <?php
    }
    else{
        echo '<p class="alert alert-danger">There is no data</p>';
    }
    ?>
    <script>
        // localStorage.setItem('count','0');
        //let count=localStorage.count;
        //let btn=document.querySelector('button');
        //let cnt=0;
        //btn.onclick=function(){
        //    // localStorage.setItem('count','a');
        //    if(count==='a'){
        //        <?php
        //        if($_SERVER['REQUEST_METHOD']=='POST') {
        //            $products = get_products_des();
        //        }
        //        ?>
        //        let x=Number(count);
        //        x++;
        //        let s=x.toString();
        //        localStorage.setItem('count','d');
        //        console.log(count);
        //        // cnt++;
        //    }
        //    else{
        //        <?php
        //        if($_SERVER['REQUEST_METHOD']=='POST') {
        //            $products = get_products_asc();
        //        }
        //        ?>
        //        let x=Number(count);
        //        x++;
        //        let s=x.toString();
        //        localStorage.setItem('count','a');
        //        // cnt++;
        //        console.log(count);
        //    }
        //    console.log(cnt);
        //}
    </script>
    </body>
</html>
