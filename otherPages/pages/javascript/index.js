const animationBoxEl = document.querySelector(".why-cion__animation-box");
const movingEl = document.querySelectorAll(".why-cion__center-box");

const centerEl = document.querySelector(".why-cion__center");

let isVisible = false;

function updateAnimation() {
  if (isVisible) {
    if (window.innerWidth <= 768) {
      animationBoxEl.style.width = "18.841rem";
      animationBoxEl.style.height = "12.245rem";
      // animationBoxEl.style.visibility = "visible";
      animationBoxEl.style.opacity = "1";
      return;
    }
    animationBoxEl.style.width = "26.58490566037736rem";
    animationBoxEl.style.height = "12.245rem";
    // animationBoxEl.style.visibility = "visible";
    animationBoxEl.style.opacity = "1";
  } else {
    animationBoxEl.style.width = "50%";
    animationBoxEl.style.height = "50%";
    // animationBoxEl.style.visibility = "hidden";
    animationBoxEl.style.opacity = "0";
  }
}

updateAnimation();


window.addEventListener("resize", (event) => {
  updateAnimation();
});

const options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.5,
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      isVisible = true;
      updateAnimation();
    } else {
      isVisible = false;
      updateAnimation();
    }
  });
}, options);

observer.observe(centerEl)








