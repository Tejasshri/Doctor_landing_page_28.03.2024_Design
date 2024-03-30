<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="dr. purushottam landing page" content="landing page">
    <title>Dr Purushottam</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/our-locations.css">
    <link rel="stylesheet" href="./styles/operates-hospital.css">
    <link rel="stylesheet" href="./styles/reusable.css">
    <link rel="stylesheet" href="./styles/our-team.css">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/heroBanner.css">
    <link rel="stylesheet" href="./styles/DoctorsApproach.css">
    <link rel="shortcut icon" href="/assets/favicon.webp" type="image/x-icon">
    <script src="./javaScript/index.js" defer></script>
</head>

<body>
    <?php include "./components/connectDB.php"; ?>
    <div class="main-app">
        <?php include("./components/navBar.php") ?>
        <?php include("./components/heroBanner.php") ?>
        <?php include("./components/DoctorsApproach.php") ?>
        <?php include "./components/operatesHospital.php"; ?>
        <?php include "./components/ourLocations.php"; ?>
        <?php include "./components/ourTeam.php"; ?>
    </div>
</body>

</html>