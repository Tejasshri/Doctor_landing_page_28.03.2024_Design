<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biopsy LandingPage</title>
    <link rel="shortcut icon" href="../assets/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/biopsyTestCost.css">
    <link rel="stylesheet" href="../styles/biopsyProcess.css">
    <link rel="stylesheet" href="../styles/getInTouch.css">
    <link rel="stylesheet" href="../styles/whyCion.css">
    <link rel="stylesheet" href="../styles/ourlocation.css">
    <link rel="stylesheet" href="../styles/biopsyFaqs.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/banner.css">
    <link rel="stylesheet" href="../styles/whyCion.css">
    <link rel="stylesheet" href="../styles/costOfBiopsy.css">
    <link rel="stylesheet" href="../styles/typesOfBiopsy.css">
    <link rel="stylesheet" href="../styles/modalBox.css">
    <link rel="stylesheet" href="../styles/patientExperience.css">
    <script src="../javascript/index.js" defer></script>
    <script src="../javascript/location.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <div class="main-app-container">

        <!-- connectDB -->
        <?php include("../components/connectDB.php") ?>

        <!-- arrays -->
        <?php include("../components/array.php") ?>

        <!-- NavBar -->
        <?php include("../components/navBar.php") ?>

        <!-- heroBanner -->
        <?php include("../components/banner.php") ?>

        <!-- Biopsy Test Cost in Hyderabad -->
        <?php include("../components/biopsyTestCost.php") ?>

        <!-- whyCion -->
        <?php include("../components/whyCion.php") ?>

        <!-- type of biopsy -->
        <?php include("../components/typesOfBiospy.php") ?>

        <!-- patientExperience -->

        <?php include("../components/patientExperience.php") ?>

        <!-- get in touch -->
        <?php include("../components/getInTouch.php") ?>

        <!-- How is the Biopsy Process Done ? -->
        <?php include("../components/biopsyProcess.php") ?>

        <!-- cost of biopsy -->
        <?php include("../components/costOfBiopsy.php") ?>

        <?php include "../components/ourLocations.php" ?>

        <!-- faqs -->
        <?php include("../components/biopsyFaqs.php") ?>

        <!-- footer -->
        <?php include("../components/footer.php") ?>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
                clickable: true,
                KeyboardEvent: true
            },
            autoplay: {
                delay: 10000,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                }
            }

        });
    </script>

</body>

</html>