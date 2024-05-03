<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breast Biopsy Landing Page</title>
    <link rel="shortcut icon" href="assets/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/biopsyTestCost.css">
    <link rel="stylesheet" href="styles/biopsyProcess.css">
    <link rel="stylesheet" href="styles/getInTouch.css">
    <link rel="stylesheet" href="styles/whyCion.css">
    <link rel="stylesheet" href="styles/ourlocation.css">
    <link rel="stylesheet" href="styles/biopsyFaqs.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/banner.css">
    <link rel="stylesheet" href="styles/whyCion.css">
    <link rel="stylesheet" href="styles/costOfBiopsy.css">
    <link rel="stylesheet" href="styles/typesOfBiopsy.css">
    <link rel="stylesheet" href="styles/modalBox.css">
    <link rel="stylesheet" href="styles/patientExperience.css">
    <script src="javascript/index.js" defer></script>
    <script src="javascript/location.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        @media screen and (min-width: 768px) {
            .patient-experience-container {
                margin-top: 2rem;
            }
        }
        @media screen and (max-width: 768px) {
            .patient-experience-container {
                margin-top: 1rem;
            }
            .patient-experience-container>h1 {
    margin-top: 1rem;
}
        }
    </style>
</head>

<body>
    <div class="main-app-container">

        <!-- connectDB -->
        <?php include("components/connectDB.php") ?>

        <!-- arrays -->
        <?php include("components/array.php") ?>

        <!-- NavBar -->
        <?php include("components/navBar.php") ?>

        <!-- heroBanner -->
        <?php include("components/banner7.php") ?>

        <!-- Biopsy Test Cost in Hyderabad -->
        <?php include("components/biopsyTestCost7.php") ?>

        <!-- whyCion -->
        <?php include("components/whyCion.php") ?>

        <?php include("components/typesOfBiospy7.php") ?>

        <!-- patientExperience -->

        <?php include("components/patientExperience.php") ?>

        <!-- get in touch -->
        <?php include("components/getInTouch.php") ?>

        <?php include "components/ourLocations.php" ?>

        <!-- faqs -->
        <?php include("components/biopsyFaqs7.php") ?>

        <!-- footer -->
        <?php include("components/footer.php") ?>



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