<?php
header("Access-Control-Allow-Origin: http://10.30.29.55:63341");
header("Access-Control-Allow-Credentials: true");
$data=array('userName'=>'123456');
echo json_encode($data);
?>