<?php
require_once 'init.php';


 $service="";
if(isset($_POST['service']))
    $service=json_encode($_POST['service']);

try {
    $sql = "INSERT INTO T_quote VALUES (null,'".$_POST['name']."','"
        .$_POST['email']."','"
        .$_POST['tel']."','"
        .$_POST['message'].
        "','".$service."');";
    
    $rs = $db->query($sql);
    echo "success";
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>