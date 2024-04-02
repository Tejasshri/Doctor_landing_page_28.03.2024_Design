<?php
error_reporting(E_ALL ^ E_NOTICE);

ob_start();

$utm_source = (isset($_REQUEST['utm_source']) && $_REQUEST['utm_source'] != '') ? $_REQUEST['utm_source'] : '';
$utm_campaign = (isset($_REQUEST['utm_campaign']) && $_REQUEST['utm_campaign'] != '') ? $_REQUEST['utm_campaign'] : '';
$utm_medium = (isset($_REQUEST['utm_medium']) && $_REQUEST['utm_medium'] != '') ? $_REQUEST['utm_medium'] : '';

?>



<h1 class="doctors-approach-h1">Doctor’s<span> Approach to Treatment</span></h1>

<section id="formSection" >

    <div class="doctor__approach__text">
        <div>
            <img src="./assets/cancerRibbon.webp" alt="cancerRibbon">

            <div>
                <h1>
                    Dr. Purushottam is extremely talented surgeon known for providing <span> clear treatment options </span> and <span> strong moral support </span> to patients and their families.
                </h1>
            </div>
        </div>
        <div>
            <img src="./assets/cancerRibbon.webp" alt="cancerRibbon">
            <div>
                <h1>
                    Despite his extensive experience, he remains constantly learning and updating himself on the <span> latest techniques </span> in cancer treatment. </h1>
            </div>
        </div>
        <div>
            <img src="./assets/cancerRibbon.webp" alt="cancerRibbon">

            <div>
                <h1>
                    His patients' biggest appreciation has been about how he balances <span>hope and reality in his consultations </span> and ongoing conversations. </h1>
            </div>
        </div>
    </div>
    <div class="doctor__approach__form__container">
        <div><img src="./assets/Phone-icon.webp" alt="phone-logo"> <a href="tel:+917032656153" class="phone-number">+91 7032656153</a> / <a href="tel:+919989835053" class="phone-number">9989835053</a></div>
        <h1 style="text-align: center;">Book Your Appointment</h1>
        <!-- lead form -->
        <form action="./components/formRedirectPage.php" method="POST" id="form__submit">

            <input type="hidden" name="utm_source" id="utm_source" value="<?php echo $utm_source; ?>">
            <input type="hidden" name="utm_campaign" id="utm_campaign" value="<?php echo $utm_campaign; ?>">
            <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo $utm_medium; ?>">
            <input type="hidden" name="form_source" id="form_source" value="Dr.Purushotham-LandingPage">


            <input type="text" id="name" name="name" placeholder="Name" required pattern="[A-Za-z ]{3,}" minlength="3" maxlength="25" title="Please enter at least 3 alphabetic characters">
            <input type="tel" id="phone" name="phone" placeholder="Phone Number" required minlength="10" maxlength="14" title="Minimum 10 Numbers Required">
            <textarea placeholder="Message" id="message" name="message" required minlength="20" maxlength="500" title="Minimum 20 Characters Required"></textarea>
            <button type="submit">Book Now</button>
        </form>
    </div>
</section>