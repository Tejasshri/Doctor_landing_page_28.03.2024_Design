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
    <link rel="stylesheet" href="./styles/patientReviewSection.css">
    <link rel="stylesheet" href="./styles/expertiseSection.css">
    <link rel="stylesheet" href="./styles/getInTouch..css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="shortcut icon" href="./assets/favicon.webp" type="image/x-icon">
    <link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="./javaScript/index.js" defer></script>
</head>

<body>
    <?php include "./components/connectDB.php"; ?>
    <?php include "./components/data.php"; ?>
    <div class="main-app">
        <?php include("./components/navBar.php") ?>
        <?php include("./components/heroBanner.php") ?>
        <?php include("./components/DoctorsApproach.php") ?>
        <div class="types-of-cancer-main-container">
            <h2> Surgical Oncologist <br />
                <span>Dr. Purushotham Area of Expertise</span>
            </h2>
            <?php include('./components/expertiseSection.php') ?>
        </div>
        <?php include('./components/patentsReviewsSection.php') ?>
        <?php include('./components/getInTouch.php') ?>
        <?php include "./components/operatesHospital.php"; ?>
        <?php include "./components/ourLocations.php"; ?>
        <?php include "./components/ourTeam.php"; ?>
        <?php include "./components/footer.php" ?>
    </div>

</body>

</html>