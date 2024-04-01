
<?php  
include("./connectDB.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name           = htmlspecialchars($_POST['name']);
    $phone          = htmlspecialchars($_POST['phone']);
    $message        = htmlspecialchars($_POST['message']);
    $type 			= htmlspecialchars($_POST['form_source']);
    $utm_source 	= htmlspecialchars($_POST["utm_source"]);
	$utm_campaign 	= htmlspecialchars( $_POST["utm_campaign"] );
	$utm_medium 	= htmlspecialchars( $_POST["utm_medium"] );
	date_default_timezone_set('Asia/Kolkata');
	$timestamp = date("Y-m-d H:i:s");

//   echo "Name: $name<br>";
//     echo "Phone: $phone<br>";
//     echo "Message: $message<br>";
//     echo "UTM Source: $utm_source<br>";
//     echo "UTM Campaign: $utm_campaign<br>";
//     echo "UTM Medium: $utm_medium<br>";
//     echo "Timestamp: $timestamp<br>";


    if (empty($errors)) {
        $sql = 'INSERT INTO leadform (name, phone, message, utm_source, utm_campaign, utm_medium, created_on,form_source) VALUES (?,?,?,?,?,?,?,?)';
        $queryPrepare = $conn->prepare($sql);
        $queryPrepare->bind_param('ssssssss', $name, $phone, $message, $utm_source,$utm_campaign,$utm_medium,$timestamp,$type );
        
        if ($queryPrepare->execute()) {
            echo '<h1>Thank you for your booking</h1>';
            echo "<h2>name : $name</h2>";
            echo "<h2>phone number : $phone </h2>";
            echo "<h2>message : $message </h2>";
        } else {
            echo "<h1>Error:</h1> " . $sql . "<br>" . $conn->error;
        }
        $queryPrepare->close();
        $conn->close();
    }
}
?>