<?php
$dbname = "cion_db";
$dbhost = "localhost:3306";
$dbpass = "0808@#Tejas";
$dbuser = "root";

try {
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    function convertIntoArray($conn,$query) {
        $result = $conn->query($query);
        if ($result->num_rows == 0) {
            echo "No Data Found" ;
        }
        $rows = [] ;
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows ;
    }

    $purushottamOperatedHopitalsArray = [];
    if (!$conn->connect_error) {
        // $purushottamOperatedHopitals = $conn->query("SELECT hospital_logo_path FROM hospitals;");        
        // while ($row = $purushottamOperatedHopitals->fetch_assoc()) {
        //     $purushottamOperatedHopitalsArray[] = $row;
        // }
        $purushottamOperatedHopitalsArray = convertIntoArray($conn,"SELECT hospital_logo_path FROM hospitals;");
    } else {
        echo "Oops connection error";
    }
} catch (Exception $e) {
    echo "Oops! Something went wrong";
}
