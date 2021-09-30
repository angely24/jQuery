<?php

require 'db_config.php';

$num_rec_per_page = 5;

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 5;
};
$start_from = ($page - 1) * $num_rec_per_page;


$sqlTotal = "SELECT * FROM items";

$sql = "SELECT * FROM items Order By id desc LIMIT $start_from, $num_rec_per_page";

$stmt = $mysql->query($sql);

$result = $stmt->fetchall(PDO::FETCH_ASSOC);

$po = count($result);

foreach ($result as $fila) {
    $json[] = $fila;
}

$stmt->execute();

$data['data'] = $json;

$resulta = $mysql->query($sqlTotal);
$resulta->execute();

$resultar = $resulta->rowCount();

$data['total'] = $resultar;



echo json_encode($data);
