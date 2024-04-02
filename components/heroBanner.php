<div class="hero-banner-container">
<div class="hero__banner__text">
<h1>Best Surgical Oncologist in Hyderabad</h1>
<h2>Dr. Purushotham Reddy K</h2>
<h3>Surgical Oncologist, CION Cancer Clinics</h3>
<p>MBBS, MS (ORL-HNS),   </br>
MCh - Surgical Oncology (Osmania)</p>
</div>
<div class="hero__banner__image">
<img src="./assets/Dr.Purushotham.webp" alt="Dr.Purushotham-image">
</div>
</div>
<div class="years-of-experience-container">
<div>
<h1><span id="yearsOfExperience">0</span> +</h1>
<h2>Years of experience</h2>
</div>
<span class="years__of__experience__vertical__line"></span>
<div>
<h1><span id="oncologySurgeries">0</span> +</h1>
<h2>Oncology Surgeries</h2>
</div>
<span  class="years__of__experience__vertical__line"></span>
<div>
<h1><span id="surgeryHours">0</span> +</h1>
<h2>Surgery Hours</h2>
</div>
</div>
<script>
  function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = range / (duration / 1000); 
    var obj = document.getElementById(id);
    var startTime = null;

    function updateValue(timestamp) {
      if (!startTime) startTime = timestamp;
      var progress = timestamp - startTime;
      current = start + increment * progress / 1000; 
      if (current >= end) {
        current = end;
        clearInterval(timer);
      }
      obj.innerHTML = Math.floor(current);
    }

    var timer = setInterval(function() {
      requestAnimationFrame(updateValue);
    }, 0);
  }
  animateValue("yearsOfExperience", 0, 10, 1700);
  animateValue("oncologySurgeries", 0, 4000, 1700);
  animateValue("surgeryHours", 0, 10000, 1700);
</script>
