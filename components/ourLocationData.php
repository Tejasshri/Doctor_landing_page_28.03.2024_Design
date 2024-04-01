<?php
    include './connectDB.php';
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->query("SELECT * FROM city_table INNER JOIN centers WHERE city_table.id = centers.city_id ORDER BY city_name ;");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    $json_data = json_encode($rows);    
    header('Content-Type: application/json');    
    echo $json_data;
?>