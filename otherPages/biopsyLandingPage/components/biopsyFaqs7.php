<?php


$faq_array = [
  ["lp_question" => "Is Breast Biopsy Painful?", "lp_answer" => "Discomfort is common, but significant pain is usually managed with local anesthesia or sedation.  "],

  ["lp_question" => "What is done before the Breast biopsy?", "lp_answer" => "Before the biopsy, your doctor may conduct imaging tests (like mammography or ultrasound) to locate the suspicious area. Blood tests may be done to assess clotting factors.
  "],
  ["lp_question" => "What is done after the Breast biopsy?", "lp_answer" => "After the biopsy, pressure may be applied to the biopsy site to control bleeding. You may be given a bandage or dressing. You'll receive instructions on caring for the biopsy site and managing any discomfort.
  "],

  ["lp_question" => "What happens during a Breast Biopsy?", "lp_answer" => "During the biopsy, a small sample of breast tissue is removed using a needle (core needle biopsy) or through a small incision (surgical biopsy). Local anesthesia is used to numb the area. Imaging guidance (such as ultrasound or mammography) may be used to precisely target the biopsy site.

  "],
  ["lp_question" => "Who is going to be performing the process?", "lp_answer" => "A radiologist, breast surgeon, or interventional radiologist typically performs breast biopsies.

  "],
  ["lp_question" => "How long should I have to stay in the hospital?", "lp_answer" => "Breast biopsies are usually performed on an outpatient basis, and you can typically go home the same day.

  "],
  ["lp_question" => "When do I get my Results?  ", "lp_answer" => "Results are typically available within a few days to a week after the biopsy. Your doctor will discuss the findings with you and recommend appropriate next steps."],
  
  ["lp_question" => "What are the Risks involved?", "lp_answer" => "Risks of breast biopsy include temporary bruising, bleeding, infection, and rarely, damage to nearby structures. There's also a small risk of complications related to anesthesia. It's important to follow post-biopsy instructions and contact your doctor if you experience any unusual symptoms after the procedure."],
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