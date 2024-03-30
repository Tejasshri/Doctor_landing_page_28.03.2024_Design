<div class="our-hospital-dr-purushottam-operates">
    <div class="our-hospital-dr-purushottam-operates__header">
        <h1 class="resuable-head-title">
        Cancer Surgery Hospitals where <span>Dr. Purushotham Operates</span>
        </h1>
       
    </div>
    <div class="our-hospital-dr-purushottam-operates__logo-container">
        <?php foreach ($purushottamOperatedHopitalsArray as $partner ): ?>
            <div class="our-hospital-dr-purushottam-operates__logo-box" >
                <img loading="eager" height="100%" width="100%" src="../assets/operatesHospitailLogo/<?php echo $partner["hospital_logo_path"]; ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
</div>