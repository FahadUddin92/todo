<?php
/**
 * Created by PhpStorm.
 * User: Fahad Uddin
 * Date: 3/11/2018
 * Time: 11:41 PM
 */

$db = new MySqli;
$db->connect('localhost', 'root', '','todo');
if($db){
   // echo "success";
}
?>