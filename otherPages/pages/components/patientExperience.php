<section class="patient-experience-container">

    <h1>Biopsy Test <span>Patient Experience</span></h1>

    <p>We make sure our patients are empowered to take control of their health and make informed choices.
        Their words of appreciation keep us going.</p>
    <div class="swiper mySwiper">
        <!-- <div class="swiper-button-next-custom">
            <img src="/assets/forward-btn.webp" alt="forward-btn" />
        </div>
        <div class="swiper-button-prev-custom">
            <img src="/assets/backward-btn.webp" alt="backward-btn" />
        </div> -->
        <div class="swiper-wrapper swiper-active">
            <?php
            foreach ($PatientExperiences as $details) : ?>
                <div class="swiper-slide">
                    <h1><?php echo $details[0]; ?></h1>
                    <hr>
                    <div>
                        <h2><?php echo $details[1]; ?></h2>
                        <span class="star-rating">
                            <?php
                            $rating = intval($details[2]);
                            $stars = min(5, max(0, $rating));
                            for ($i = 0; $i < $rating; $i++) {
                                if ($i < $stars) {
                                    echo "<span class=\"selected\"></span>";
                                } else {
                                    echo "<span></span>";
                                }
                            }
                            ?>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>

</section>