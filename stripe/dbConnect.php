<?php
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD. DB_NAME);

if ($db->connect_errno){
    printf("connect faild: %s\n", $db->connect_error);
    exit();
}
 ?>