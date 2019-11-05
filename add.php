<?php
/**
 * Created by PhpStorm.
 * User: Fahad Uddin
 * Date: 3/11/2018
 * Time: 11:40 PM
 */
//include "db.php";

$conn = new mysqli('localhost', 'root', 'root','todo');

$name =$_POST['task'];

$val=mysqli_query($conn,"INSERT into todo (name) values ('$name')");
echo $val;
if($val){

    header('location:index.php');
}
?>