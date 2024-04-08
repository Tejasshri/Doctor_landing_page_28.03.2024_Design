<div class="typesofcancer-subcontainer">
    <?php foreach ($expertiseSection as $eachExpertiseCard) : ?>
        <div class='typesofcancer-subcontainer__card' onclick='displayPopup()'>
            <img src="<?php echo $eachExpertiseCard[0];  ?>" alt="<?php echo $eachExpertiseCard[1]; ?>">
            <p><?php echo $eachExpertiseCard[1]; ?></p>
        </div>
    <?php endforeach; ?>
</div>