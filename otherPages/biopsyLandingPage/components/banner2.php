<?php
error_reporting(E_ALL ^ E_NOTICE);
ob_start();
$utm_source = (isset($_REQUEST['utm_source']) && $_REQUEST['utm_source'] != '') ? $_REQUEST['utm_source'] : '';
$utm_campaign = (isset($_REQUEST['utm_campaign']) && $_REQUEST['utm_campaign'] != '') ? $_REQUEST['utm_campaign'] : '';
$utm_medium = (isset($_REQUEST['utm_medium']) && $_REQUEST['utm_medium'] != '') ? $_REQUEST['utm_medium'] : '';
?>
<div class="banner">
    <form class="banner__form" method="POST" action="components/formRedirectPage.php">
        <div class="banner__form-top">
            <img src="assets/phoneImg.webp" alt="phone-icon">
            <a style="all:unset;">+91 7032656153 / 9989835053</a>
        </div>
        <h1 class="banner__form-heading">Book Your <span style="color:var(--brandClr);">Biopsy Test Now !</span></h1>

        <input type="hidden" name="utm_source" id="utm_source" value="<?php echo $utm_source; ?>">
        <input type="hidden" name="utm_campaign" id="utm_campaign" value="<?php echo $utm_campaign; ?>">
        <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo $utm_medium; ?>">
        <input type="hidden" name="form_source" id="form_source" value="Biopsy Landing Page">

        <input class="banner__first-input" type="text" placeholder="Name" name="name" required pattern="[A-Za-z ]{3,}" minlength="3" maxlength="25" title="Please enter at least 3 alphabetic characters">
        <input type="text" placeholder="Phone number" name="phone" required minlength="10" maxlength="14" title="Minimum 10 Numbers Required">
        <input type="text" placeholder="Message" name="message" required minlength="20" maxlength="500" title="Minimum 20 Characters Required">
        <button type="submit" class="banner__submit-btn">
            Book Now
        </button>
    </form>
    <div class="banner__safety-hands-section">
        <h1 class="banner__safety-hands-title">
            Efficient Biopsies Aiming at
            <br><span>Minimizing Patient</span> Discomfort
        </h1>
        <p>Minimizing Side Effects by involving an Expert Oncologist rather than a generic Diagnostician</p>
        <div class="banner__specialilty-texts">
            <p>
                <img src="assets/banner-icon-1.webp" alt="cost image">
                Biopsy Test cost starts&nbsp;<span>@Rs. 1999/-</span>
            </p>
            <p>
                <img src="assets/banner-icon-2.webp" alt="cost image">
                Biopsy results in&nbsp;<span>3 working days</span>
            </p>
            <p>
                <img src="assets/banner-icon-3.webp" alt="cost image">
                Ameerpet, Kukatpally, Masab Tank,<br> Tolichowki, Komapally, Erragada
            </p>
        </div>
    </div>
    <div class="banner__rating-container">
        <div class="banner__google-rating-box">
            <h1>
                4.8/5
            </h1>
            <img src="assets/google-rating-image.webp" alt="">
        </div>
        <div class="banner__google-rating-box">
            <h1>
                10,000+
            </h1>
            <p>Biopsies Done</p>
        </div>
    </div>
</div>
<div class="invisible-form-box">

</div>