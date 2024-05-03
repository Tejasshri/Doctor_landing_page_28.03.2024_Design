<?php
$typesOfBiopsy = [
    ['assets\typesofBiopsy\core-needle-biopsy.webp', 'Core Needle Biopsy', 'A larger hollow needle is used to obtain a cylindrical tissue sample for detailed analysis, helpful in diagnosing various conditions like tumors or inflammatory diseases.'],
    ['assets\typesofBiopsy\surgicalBiopsy.webp', 'Surgical Biopsy', 'A Surgical Biopsy is a procedure where a cancer tissue sample is removed through an incision for diagnosis, typically performed under anesthesia in an operating room. '],
    ['assets\typesofBiopsy\punchBiopsy.webp', 'Punch Biopsy', 'A Punch Biopsy is a medical procedure where a small circular blade, called a punch, is used to remove a cylindrical sample of tissue from the body for cancer diagnosis.'],
    ['assets\typesofBiopsy\needleBiopsy.webp', 'Fine Needle Aspiration', 'A thin needle is used to extract a small sample of cells or fluid, useful for diagnosing tumors, infections, or cysts based on cellular composition.'],
    ['assets\typesofBiopsy\skinBiopsy.webp', 'Skin Biopsy', 'Skin Biopsy is a procedure where a small sample of skin tissue is removed to diagnose or evaluate any cancerous abnormality on the skin.'],
    ['assets\typesofBiopsy\image-guided-biopsy.webp', 'Image Guided Biopsy', 'An Image Guided Biopsy uses advanced imaging (like CT or Ultrasound) to precisely guide the biopsy needle for tissue sampling, aiding in the diagnosis of cancer.'],
];
?>
<div class="typesofbiopsy-container">
    <h2 class="h2-text">Types of <span class="h2-span__text">Breast Biopsy Procedures</span></h2>
    <div class="typesofbiopsy-container__cardscontainer">
        <?php foreach ($typesOfBiopsy as $eachCancerCard) : ?>
            <div class="typesofbiopsy-container__eachcard" onclick="displayPopup('<?php echo $eachCancerCard[1]; ?>','<?php echo $eachCancerCard[2]; ?>')">
                <img src="<?php echo $eachCancerCard[0]; ?>" alt="<?php echo $eachCancerCard[1]; ?>" />
                <p><?php echo $eachCancerCard[1]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function closeVideo() {
            Swal.close(); // Close the SweetAlert dialog
        }


        function displayPopup(title, description) {
            const popupContainer = `
        <button class="popupbtn1" onclick="closeVideo()"><img src="assets/CancelButtonSmallDevices.webp" alt="cancel-button-icon" /></button>
        <button class="popupbtn2" onclick="closeVideo()"><img src="assets/Cancel.webp" alt="cancel-button-icon" /></button>
        <div class="popup-container">
            <div class="popup-container__banner-image-section">
                <h3>${title}</h3>
                <p>${description}</p>
            </div>
            <div class="popup-container__text-container">
                <h3>To Know More, Fill The Form</h3>
                <form method="POST" action="components/formRedirectPage.php">
                <input type="hidden" name="utm_source" id="utm_source" value="<?php echo $utm_source; ?>">
            <input type="hidden" name="utm_campaign" id="utm_campaign" value="<?php echo $utm_campaign; ?>">
            <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo $utm_medium; ?>">
            <input type="hidden" name="form_source" id="form_source" value="Biopsy Landing Page">
           <input name="username" required pattern="[A-Za-z ]{3,}" minlength="3" maxlength="25" title="Please enter at least 3 alphabetic characters" type="text" placeholder="Name" name="name" />
                    <input name="userPassword" type="tel" required minlength="10" maxlength="14" title="Minimum 10 Numbers Required" placeholder="Phone number" name="phone" />
                    <button type="submit">Submit</button>
                    <label>Call us at:</label>
                    <a href="tel:1800 120 2676"><button type="button">1800 120 2676</button></a>
                </form>
            </div>
        </div>
        `;

            Swal.fire({
                html: popupContainer,
                width: '100%',
                padding: '0px',
                showCloseButton: false,
                showConfirmButton: false,
            });
        }
    </script>
</div>

<style>
    @media screen and (min-width: 768px) {
        .typesofbiopsy-container__eachcard {
            width: 9.45rem;
            height: 9.45rem;
        }

        .typesofbiopsy-container__eachcard img {
            width: 4.02rem;
            height: 4.02rem;
            top: 1.377rem;
        }

        .typesofbiopsy-container__eachcard p {
            font-size: .622rem;
            margin-top: .85rem;
        }
    }
</style>