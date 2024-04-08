
<?php include("./connectDB.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name           = htmlspecialchars($_POST['name']);
    $phone          = htmlspecialchars($_POST['phone']);
    $message        = htmlspecialchars($_POST['message']);
    $type             = htmlspecialchars($_POST['form_source']);
    $utm_source     = htmlspecialchars($_POST["utm_source"]);
    $utm_campaign     = htmlspecialchars($_POST["utm_campaign"]);
    $utm_medium     = htmlspecialchars($_POST["utm_medium"]);
    date_default_timezone_set('Asia/Kolkata');
    $timestamp = date("Y-m-d H:i:s");

    if (empty($error)) {
        $sql = 'INSERT INTO ccl_immunotherapy (name, phone, message, source, utm_source, utm_campaign, utm_medium, created_on) VALUES (?,?,?,?,?,?,?,?)';
        $queryPrepare = $conn->prepare($sql);
        $queryPrepare->bind_param('ssssssss', $name, $phone, $message, $type, $utm_source, $utm_campaign, $utm_medium, $timestamp);

        if ($queryPrepare->execute()) {
            echo '<script>window.location.href = "https://www.cioncancerclinics.com/thankyou";</script>';
        } else {
            echo "<h1>Error:</h1> " . $sql . "<br>" . $conn->error;
        }
        $queryPrepare->close();
        $conn->close();
    }
}
?>
