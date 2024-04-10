

<?php 
$faqs_data = convertIntoArray($conn, "Select * from lp_faqs WHERE lp_name = 'dr.purushotham';")
?>
<h1 class="faqs-h1">FAQ’s </h1>
<div class="accordion">
    <?php foreach($faqs_data as $details): ?>
    <div class="accordion-item">
        <div class="accordion-title"><span class="arrow">+</span> <?php echo $details["lp_question"]; ?></div>
        <div class="accordion-content"><?php echo $details["lp_answer"]; ?></div>
    </div>
    <?php endforeach; ?>
</div>


  <script>
 document.addEventListener('DOMContentLoaded', function() {
  const accordionItems = document.querySelectorAll('.accordion-item');

  accordionItems.forEach(item => {
    const title = item.querySelector('.accordion-title');
    const arrow = title.querySelector('.arrow');
    const content = item.querySelector('.accordion-content');

    title.addEventListener('click', function() {
      const isOpen = content.style.display === 'block';
      
   
      accordionItems.forEach(otherItem => {
        otherItem.querySelector('.accordion-content').style.display = 'none';
        otherItem.querySelector('.arrow').textContent = '+';
        otherItem.querySelector('.accordion-title').style.backgroundColor = '#EEEEEE';
      });

      content.style.display = isOpen ? 'none' : 'block';
      arrow.innerHTML = isOpen ? '+' : '<span style="font-size:1.6rem;">-<span>';
      title.style.backgroundColor = isOpen ? '#EEEEEE' : '#F0D0DD';
    });
  });
});
</script>