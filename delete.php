<?php
$con=mysqli_connect("localhost","root","root","todo");
/**
 * Created by PhpStorm.
 * User: Fahad Uddin
 * Date: 3/11/2018
 * Time: 11:40 PM
 */
$id = $_GET['id'];
//echo $id;
$db=mysqli_query($con,"DELETE FROM todo WHERE id ='$id'");
if ($db){
    header('location:index.php');
}