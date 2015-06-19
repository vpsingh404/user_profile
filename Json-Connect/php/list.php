<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'database.php';
$db = new Database();
$data = array();
$rs = $db->selectAll('persons');
while($row = mysqli_fetch_assoc($rs)){
    $data[] = $row;
}
echo  json_encode($data);