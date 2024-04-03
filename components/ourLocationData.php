<?php
    include './connectDB.php';
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->query("SELECT id, branch AS center_name, address, cities.city AS city_name, map_url FROM locations JOIN cities ON locations.city = cities.city_id WHERE locations.id IN ( SELECT location_id FROM location_area WHERE area_id IN (SELECT area_id FROM dr_area WHERE dr_id = 3)) ;");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    $json_data = json_encode($rows);    
    header('Content-Type: application/json');    
    echo $json_data;
?>