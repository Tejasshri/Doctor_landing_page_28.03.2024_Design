<div class="patientsReview-main-section">
    <h2>Patient testimonials about
        <br />
        <span>Dr. Purushotham Surgical Oncologist</span>
    </h2>
    <p>We make sure our patients are empowered to take control of their health and make informed choices.
        Their words of appreciation keep us going.</p>

    <div class="swiper-main-container">
        <div class="swiper-button-next-custom">
            <img src="assets\leftarrow.webp" alt="left-arrow" />
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                $sql = "";
                $sql = "SELECT * FROM videos WHERE vcat = 1 AND vsubcat = 3";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='swiper-slide' onclick='openVideo(\"" . $row['video_url'] . "\")' >";
                        echo "<img src='" . $row["thumbnail_name"] . "' alt='Patient Image' />";
                        echo "<div>";
                        echo "<span style='overflow:hidden;'>" . $row["title"] . "</span>"; // Assuming reviewText holds the surgery information
                        echo "<button onclick='openVideo(\"" . $row['video_url'] . "\")'>";
                        echo "<img src='assets/playIcon.webp' alt='Play Icon' />";
                        echo "<span>Watch Full Video</span>";
                        echo "</button>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "No reviews found";
                }

                ?>
            </div>
        </div>
        <div class="swiper-button-prev-custom">
            <img src="assets\rightarrow.webp" alt="right-arrow" />
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            spaceBetween: 20,
            keyboard: {
                enabled: true,
            },
            navigation: {
                nextEl: ".swiper-button-prev-custom",
                prevEl: ".swiper-button-next-custom",
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 35,

                }
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            var numSlides = swiper.slides.length;
            let leftSideButton = document.querySelector(".swiper-button-next-custom");
            let rightSideButton = document.querySelector(".swiper-button-prev-custom");

            if (numSlides <= 3) {
                leftSideButton.style.display = "none !important";
                rightSideButton.style.display = "none !important";
            } else {
                leftSideButton.style.display = "flex";
                rightSideButton.style.display = "flex";
            }
        });





        // When the User Clicks On The Carousel Video Link This function Will get's triggered
        function openVideo(videoUrl) {
            // Display SweetAlert dialog with iframe content
            const iframeHtml = `
                <iframe width="90%" height="200" src="${videoUrl}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <button class="iframe__button" onclick="closeVideo()">Close Video</button>`;
            Swal.fire({
                html: iframeHtml,
                width: '95%',
                padding: '1rem',
                showCloseButton: false,
                showConfirmButton: false,
                showCloseButton: false,
            });
        }

        function closeVideo() {
            Swal.close(); // Close the SweetAlert dialog
        }

        // When the User Clicks On The epertise Card Section Link This function Will get's triggered

        function displayPopup() {
            const popupContainer = `
                <button class="popupbtn1" onclick="closeVideo()"><img src="assets/CancelButtonSmallDevices.webp" alt="cancel-button-icon" /></button>
                <button class="popupbtn2" onclick="closeVideo()"><img src="assets/Cancel.webp" alt="cancel-button-icon" /></button>
                <div class="popup-container">
                <img src="assets/popupBanner.webp" alt="popup-banner-img" >      
                <div class="popup-container__text-container">
                    <h3>To Know More About The Doctor</h3>
                    <form method="POST" action="components/formRedirectPage.php">
                    <input type="hidden" name="utm_source" id="utm_source" value="<?php echo $utm_source; ?>">
            <input type="hidden" name="utm_campaign" id="utm_campaign" value="<?php echo $utm_campaign; ?>">
            <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo $utm_medium; ?>">
            <input type="hidden" name="form_source" id="form_source" value="Dr.Purushotham-LandingPage">
                    <input name="name" required pattern="[A-Za-z ]{3,}" minlength="3" maxlength="25" title="Please enter at least 3 alphabetic characters" type="text" placeholder="Enter Your Name Here" name="name" />
                        <input name="phone" type="tel" required minlength="10" maxlength="14" title="Minimum 10 Numbers Required" placeholder="Enter Your Phone Number Here" name="phone" />
                        <button type="submit">Submit</button>
                        <label >Call us at:</label>
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