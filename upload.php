<?php
require_once 'conn.php';

if(isset($_POST['upload'])){
    $image = $_FILES['image']['name'];
    $_file_temp = $_FILES['img']['tmp_name'];
    $alllow_ext = array('jpeg','jpg', 'gif', 'png');
    $exp = explode (".", $file_name);
    $ext = end($exp);
}
?>