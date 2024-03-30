
<?php 
include("./connectDB.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);


    if (empty($errors)) {
        $sql = 'INSERT INTO leadform (name, phone, message) VALUES (?, ?, ?)';
        $queryPrepare = $conn->prepare($sql);
        $queryPrepare->bind_param('sss', $name, $phone, $message);
        
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
