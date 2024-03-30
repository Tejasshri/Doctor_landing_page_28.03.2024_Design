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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>