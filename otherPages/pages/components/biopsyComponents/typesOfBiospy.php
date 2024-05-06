<div class="typesofbiopsy-container">
    <h2 class="h2-text">Types of <span class="h2-span__text">Biopsy Procedures</span></h2>
    <div class="typesofbiopsy-container__cardscontainer">
        <?php foreach ($typesOfBiopsy as $eachCancerCard) : ?>
            <div class="typesofbiopsy-container__eachcard" onclick="displayPopup('<?php echo $eachCancerCard[1]; ?>','<?php echo $eachCancerCard[2]; ?>')">
                <img src="../<?php echo $eachCancerCard[0]; ?>" alt="<?php echo $eachCancerCard[1]; ?>" />
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
        <button class="popupbtn1" onclick="closeVideo()"><img src="../assets/CancelButtonSmallDevices.webp" alt="cancel-button-icon" /></button>
        <button class="popupbtn2" onclick="closeVideo()"><img src="../assets/Cancel.webp" alt="cancel-button-icon" /></button>
        <div class="popup-container">
            <div class="popup-container__banner-image-section">
                <h3>${title}</h3>
                <p>${description}</p>
            </div>
            <div class="popup-container__text-container">
                <h3>To Know More, Fill The Form</h3>
                <form method="POST" action="../components/formRedirectPage.php">
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