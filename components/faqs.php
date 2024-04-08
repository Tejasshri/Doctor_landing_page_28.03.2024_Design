

<?php 
$faqs_data = convertIntoArray($conn, "Select * from lp_faqs;")
?>
<h1 class="faqs-h1">FAQ’s </h1>
<div class="accordion">
    <?php foreach($faqs_data as $details): ?>
    <div class="accordion__item">
        <div class="accordion__title"><span class="arrow">+</span> <?php echo $details["lp_question"]; ?></div>
        <div class="accordion__content"><?php echo $details["lp_answer"]; ?></div>
    </div>
    <?php endforeach; ?>
</div>


  <script>
 document.addEventListener('DOMContentLoaded', function() {
  const accordionItems = document.querySelectorAll('.accordion__item');

  accordionItems.forEach(item => {
    const title = item.querySelector('.accordion__title');
    const arrow = title.querySelector('.arrow');
    const content = item.querySelector('.accordion__content');

    title.addEventListener('click', function() {
      const isOpen = content.style.display === 'block';
      
   
      accordionItems.forEach(otherItem => {
        otherItem.querySelector('.accordion__content').style.display = 'none';
        otherItem.querySelector('.arrow').textContent = '+';
        otherItem.querySelector('.accordion__title').style.backgroundColor = '#EEEEEE';
      });

      content.style.display = isOpen ? 'none' : 'block';
      arrow.textContent = isOpen ? '+' : '-';
      title.style.backgroundColor = isOpen ? '#EEEEEE' : '#F0D0DD';
    });
  });
});
</script>