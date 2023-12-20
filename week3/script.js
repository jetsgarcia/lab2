// For the moving eyes
document.addEventListener("mousemove", (e) => {
  const mousex = e.clientX;
  const mousey = e.clientY;

  const anchor = document.querySelector("#anchor");
  const rect = anchor.getBoundingClientRect();
  const anchorX = rect.left + rect.width / 2;
  const anchorY = rect.top + rect.height / 2;

  const eye = document.querySelector("#eye");
  const eyeMaxMove = 10; // Maximum distance eye can move from center, adjust as needed

  // Calculate distance from center of anchor to mouse position
  const dx = mousex - anchorX;
  const dy = mousey - anchorY;

  // Calculate angle of that distance
  const angle = Math.atan2(dy, dx);

  // Calculate new position for eye based on maximum allowed movement
  const eyeX = Math.cos(angle) * eyeMaxMove;
  const eyeY = Math.sin(angle) * eyeMaxMove;

  // Apply new position to eye
  eye.style.transform = `translate(${eyeX / 16}rem, ${eyeY / 16}rem)`;
});

// For the sliding animation of elements
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    }
  });
});

const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((element) => observer.observe(element));
