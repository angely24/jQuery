<?php

require 'db_config.php';

$post = $_POST;
$sql = "INSERT INTO items (title,description)
    	VALUES ('" . $post['title'] . "','" . $post['description'] . "')";

$result = $mysql->query($sql);
$sql = "SELECT * FROM items Order by id desc LIMIT 1";
$result = $mysql->query($sql);
$data = $result->fetch(PDO::FETCH_ASSOC);
echo json_encode($data);





