
<div class="typesofcancer__subcontainer">
    <?php foreach($expertiseSection as $eachExpertiseCard) : ?>
    <div class='typesofCancer__Card' onclick='displayPopup()'>
    <img src="<?php echo $eachExpertiseCard[0];  ?>" alt="<?php echo $eachExpertiseCard[1]; ?>" >
    <p><?php echo $eachExpertiseCard[1]; ?></p>
</div>
<?php endforeach; ?>
</div>



