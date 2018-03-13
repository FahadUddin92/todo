<?php
include "db.php";
/**
 * Created by PhpStorm.
 * User: Fahad Uddin
 * Date: 3/11/2018
 * Time: 11:40 PM
 */
$id = $_GET['id'];
//echo $id;
$sql="DELETE FROM todo WHERE id ='$id'";
$db->query($sql);
if ($db){
    header('location:index.php');
}