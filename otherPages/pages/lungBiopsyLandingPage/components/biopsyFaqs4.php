<?php
$sql = 'SELECT * FROM lp_faqs WHERE lp_name = "lung biopsy"';
$result = mysqli_query($conn, $sql);
$faq_array = [];
while ($row = mysqli_fetch_assoc($result)) {
  $faq_array[] = $row;
}



?>
<h1 class="faqs-h1">FAQs</h1>
<div class="accordion-main-container">
  <div class="accordion">
    <?php for ($i = 0; $i < 4; $i++) : ?>
      <div class="accordion-item <?php echo $i === $defaultIndex ? 'default-open' : ''; ?>">
        <div class="accordion-title">
          <p><?php echo $faq_array[$i]['lp_question']; ?></p>
          <span class="arrow">+</span>
        </div>
        <div class="accordion-content"><?php echo $faq_array[$i]['lp_answer']; ?></div>
      </div>
    <?php endfor; ?>
  </div>

  <div style="margin-left: 0;" class="accordion">
    <?php for ($i = 4; $i < count($faq_array); $i++) : ?>
      <div class="accordion-item <?php echo $i === $defaultIndex ? 'default-open' : ''; ?>">
        <div class="accordion-title">
          <p><?php echo $faq_array[$i]['lp_question']; ?></p>
          <span class="arrow">+</span>
        </div>
        <div class="accordion-content"><?php echo $faq_array[$i]['lp_answer']; ?></div>
      </div>
    <?php endfor; ?>
  </div>
</div>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const defaultOpenItems = document.querySelectorAll('.default-open');

    defaultOpenItems.forEach(item => {
      const content = item.querySelector('.accordion-content');
      const arrow = item.querySelector('.arrow');
      const title = item.querySelector('.accordion-title');

      content.style.display = 'block';
      arrow.textContent = '-';
      title.classList.add('color-change');
    });

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
          otherItem.querySelector('.accordion-title').classList.remove('color-change');
        });

        content.style.display = isOpen ? 'none' : 'block';
        arrow.innerHTML = isOpen ? '+' : '<span style="font-size:1.6rem;">-<span>';
        arrow.style.bottom = isOpen ? '0px' : '10px';
        title.classList.toggle('color-change', !isOpen);
      });
    });
  });
</script>