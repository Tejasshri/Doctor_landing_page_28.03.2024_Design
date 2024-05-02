<?php
$sql = 'SELECT * FROM lp_faqs WHERE lp_name = "biopsy_landing_page"';
$result = mysqli_query($conn, $sql);
$faq_array = [];
while ($row = mysqli_fetch_assoc($result)) {
  $faq_array[] = $row;
}


$faq_array = [
  ["lp_question" => "Is Liver Biopsy Painful?", "lp_answer" => "During a liver biopsy, you will receive a local anesthetic to numb the area where the biopsy needle will be inserted. You may feel some pressure or discomfort during the procedure, but significant pain is uncommon.
  "],
  ["lp_question" => "What is done before the Liver biopsy?", "lp_answer" => "Your doctor may instruct you to refrain from eating or drinking for a certain period of time before the biopsy. Also, it is advised to temporarily stop taking certain medications before liver biopsy, especially those that can affect blood clotting.
  "],
  ["lp_question" => "What is done after the Liver biopsy?", "lp_answer" => "After the biopsy, you will be monitored for a few hours to check for any signs of complications such as bleeding or pain. Vital signs like blood pressure and heart rate will be observed. You will likely be advised to rest for the remainder of the day and avoid strenuous activities for a few days."],

  ["lp_question" => "What happens during a Liver Biopsy?", "lp_answer" => "During a liver biopsy, you will lie on your back or side. The area on your abdomen where the biopsy needle will be inserted is cleaned and numbed with a local anesthetic. Using ultrasound or CT scan guidance for precision, a thin biopsy needle is then inserted through the skin into the liver to obtain a small tissue sample.
  "],
  ["lp_question" => "Who is going to be performing the process?", "lp_answer" => "A liver biopsy is typically performed by a radiologist or a gastroenterologist, both of whom are specialized in these procedures. They are trained to use imaging techniques to guide the biopsy needle accurately into the liver.
  "],
  ["lp_question" => "How long should I have to stay in the hospital?", "lp_answer" => "Most liver biopsies are performed on an outpatient basis, meaning you can go home the same day after a brief observation period (usually a few hours). Rarely, if there are concerns about bleeding or other complications, you may need to stay overnight for observation.
  "],
  ["lp_question" => "When do I get my Results?  ", "lp_answer" => "It usually takes 3-6 days to receive biopsy results, depending solely on the complexity of the Liver biopsy and laboratory processing time. At CION Cancer Clinics, we are committed to providing you with the biopsy results as soon as possible.
  "],
  ["lp_question" => "What are the Risks involved?", "lp_answer" => "Although complications are rare, potential risks of a liver biopsy include bleeding, infection, and injury to nearby organs such as the gallbladder or lung.  "],
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