<?php
$sql = 'SELECT * FROM lp_faqs WHERE lp_name = "biopsy_landing_page"';
$result = mysqli_query($conn, $sql);
$faq_array = [];
while ($row = mysqli_fetch_assoc($result)) {
  $faq_array[] = $row;
}


$faq_array = [
  ["lp_question" => "Is Lung Biopsy Painful?  ", "lp_answer" => "The procedure is usually performed under local anesthesia, so discomfort is minimal. However, some patients may experience pressure or mild pain during the biopsy.
  "],
  ["lp_question" => "What is done before the lung biopsy?  ", "lp_answer" => "Your doctor may instruct you to refrain from eating or drinking for a certain period of time before the biopsy. Also, it is advised to temporarily stop taking certain medications before lung biopsy, especially those that can affect blood clotting.
  "],
  ["lp_question" => "What is done after the lung biopsy?", "lp_answer" => "Immediately after the biopsy, you will be closely monitored for a few hours to check for any complications such as bleeding or pneumothorax (collapsed lung). Post-procedure imaging (like chest X-rays) may be performed to assess lung status.
  "],
  ["lp_question" => "What happens during a lung Biopsy?", "lp_answer" => "During the biopsy, a needle or biopsy instrument is guided into the lung tissue through the chest wall or airways (bronchoscopy) to obtain a sample of the abnormal tissue. This is often done under imaging guidance (CT or ultrasound) for accuracy.
  "],
  ["lp_question" => "Who is going to be performing the process?", "lp_answer" => "The biopsy is typically performed by a radiologist (for CT-guided biopsies) or a pulmonologist (for bronchoscopy-guided biopsies), with assistance from trained nurses and technologists.
  "],
  ["lp_question" => "How long should I have to stay in the hospital?", "lp_answer" => "Most patients can go home the same day after a few hours of observation, assuming no complications occur. In rare cases where complications arise, an overnight hospital stay may be necessary.
  "],
  ["lp_question" => "When do I get my Results?  ", "lp_answer" => "It usually takes 3-6 days to receive biopsy results, depending solely on the complexity of the lung biopsy and laboratory processing time. At CION Cancer Clinics, we are committed to providing you with the biopsy results as soon as possible.
  "],
  ["lp_question" => "What are the Risks involved?", "lp_answer" => "Risks include bleeding, pneumothorax (collapsed lung), infection, and rarely, damage to nearby structures like blood vessels or airways. Your healthcare team takes precautions to minimize these risks during the procedure."],
]


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