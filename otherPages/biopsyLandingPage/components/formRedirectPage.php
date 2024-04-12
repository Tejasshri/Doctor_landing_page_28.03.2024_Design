<?php  
include("./connectDB.php");

// Enable error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name           = htmlspecialchars($_POST['name']);
    $phone          = htmlspecialchars($_POST['phone']);
    $message        = htmlspecialchars($_POST['message']);
    $type           = htmlspecialchars($_POST['form_source']);
    $utm_source     = htmlspecialchars($_POST["utm_source"]);
    $utm_campaign   = htmlspecialchars($_POST["utm_campaign"]);
    $utm_medium     = htmlspecialchars($_POST["utm_medium"]);

    // Set timezone and timestamp
    date_default_timezone_set('Asia/Kolkata');
    $timestamp = date("Y-m-d H:i:s");

    // Prepare and execute SQL query
    $sql = 'INSERT INTO ccl_immunotherapy (name, phone, message, utm_source, utm_campaign, utm_medium, created_on, source) VALUES (?,?,?,?,?,?,?,?)';
    $queryPrepare = $conn->prepare($sql);

    if ($queryPrepare) {
        $queryPrepare->bind_param('ssssssss', $name, $phone, $message, $utm_source, $utm_campaign, $utm_medium, $timestamp, $type);
        
        if ($queryPrepare->execute()) {
            echo '<script>window.location.href = "https://www.cioncancerclinics.com/thankyou";</script>';
        } else {
            echo "<h1>Error:</h1> " . $sql . "<br>" . $conn->error;
        }
        $queryPrepare->close();
        $conn->close();
    } else {
        echo "<h1>Error:</h1> " . $sql . "<br>" . $conn->error;
    }
}
?>
