<?php
/**
 * Created by PhpStorm.
 * User: Fahad Uddin
 * Date: 3/11/2018
 * Time: 11:40 PM
 */
include "db.php";
echo "ok";

$name =$_POST['task'];
//echo $name;
$sql = "INSERT into todo (name) values ('$name')";
$val = $db->query($sql);
if($val){

    header('location:index.php');
}
?>