<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="salesdb";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con){

    echo "There is a problem with the database connection! Contact the administrator!"
    mysqli_error();
} else{
    $sql = "SELECT* FROM  sales";
    $result = mysqli_query($con,$sql);
    $chart_data="";
    while($row = mysqli_fetch_array($result)){
        $productname[] = $row['product'];
        $sales[]= $row['total_sales'];
    }
}
?>
