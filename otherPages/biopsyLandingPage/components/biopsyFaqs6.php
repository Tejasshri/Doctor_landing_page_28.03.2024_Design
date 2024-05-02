<?php
$sql = 'SELECT * FROM lp_faqs WHERE lp_name = "biopsy_landing_page"';
$result = mysqli_query($conn, $sql);
$faq_array = [];
while ($row = mysqli_fetch_assoc($result)) {
  $faq_array[] = $row;
}


$faq_array = [
  ["lp_question" => "Is Oral Biopsy Painful?", "lp_answer" => "Discomfort is common, but significant pain is rare. Local anesthesia is used to numb the area.
  "],
  ["lp_question" => "What is done before the Oral biopsy?", "lp_answer" => "Typically, a review of medical history and medications. Sometimes, blood tests may be done.
  "],
  ["lp_question" => "What is done after the Oral biopsy?", "lp_answer" => "You may be instructed to apply ice, take pain relievers, and avoid certain foods. Follow post-procedure care instructions.  "],

  ["lp_question" => "What happens during a Oral Biopsy?", "lp_answer" => "A small piece of tissue is removed from the mouth or oral cavity using a specialized tool or scalpel. Local anesthesia is used to minimize discomfort.
  "],
  ["lp_question" => "Who is going to be performing the process?", "lp_answer" => "A Radiologist, periodontist, or ENT (Ear, Nose, and Throat) specialist typically performs oral biopsies.
  "],
  ["lp_question" => "How long should I have to stay in the hospital?", "lp_answer" => "Oral biopsies are often done on an outpatient basis, and you can usually go home the same day.
  "],
  ["lp_question" => "When do I get my Results?  ", "lp_answer" => "It usually takes 3-6 days to receive biopsy results, depending solely on the complexity of the Oral biopsy and laboratory processing time. At CION Cancer Clinics, we are committed to providing you with the biopsy results as soon as possible.
  "],
  ["lp_question" => "What are the Risks involved?", "lp_answer" => "Risks include bleeding, infection, pain, and rarely, nerve damage. Follow post-biopsy care instructions to minimize risks."],
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