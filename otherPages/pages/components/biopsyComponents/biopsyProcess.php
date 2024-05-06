


<div class="biopsy-process-container">
<h2>How is the <b>Biopsy Process Done ?</b></h2>
    <?php foreach($biopsyProcess as $details): ?>
    <div class="biopsy-process-container__accordion__item">
        <div class="biopsy-process-container__accordion__title">
                <span class="biopsy-process-container__arrow"> 
                        <img src = "../assets/biopsyImages/downarrow.webp"  alt = "downarrow-icon"/>
                </span> 
                <?php echo $details[0]; ?></div>
        <div class="biopsy-process-container__accordion__content"><?php echo $details[1]; ?></div>
    </div>
    <?php endforeach; ?>
</div>


  <script>
 document.addEventListener('DOMContentLoaded', function() {
  const accordionItems = document.querySelectorAll('.biopsy-process-container__accordion__item');

  accordionItems.forEach(item => {
    const title = item.querySelector('.biopsy-process-container__accordion__title');
    const arrow = title.querySelector('.biopsy-process-container__arrow');
    const content = item.querySelector('.biopsy-process-container__accordion__content');

    title.addEventListener('click', function() {
      const isOpen = content.style.display === 'block';
      
   
      accordionItems.forEach(otherItem => {
        otherItem.querySelector('.biopsy-process-container__accordion__content').style.display = 'none';
        otherItem.querySelector('.biopsy-process-container__arrow').innerHTML = '<img width="0.85rem" height="0.85rem" src = "../assets/biopsyImages/downarrow.webp"  alt = "downarrow-icon"/>';
        otherItem.querySelector('.biopsy-process-container__accordion__title').style.backgroundColor = '#EEEEEE';
      });

      content.style.display = isOpen ? 'none' : 'block';
      arrow.innerHTML = isOpen ? '<img width="0.85rem" height="0.85rem" src = "../assets/biopsyImages/downarrow.webp"  alt = "downarrow-icon"/>' : '<img width="0.85rem" height="0.85rem" src = "../assets/biopsyImages/uparrow.webp"  alt = "uparrow-icon"/>';
      title.style.backgroundColor = isOpen ? '#EEEEEE' : '#F0D0DD';
    });
  });
});
</script>
