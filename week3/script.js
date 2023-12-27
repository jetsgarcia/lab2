// For the text effect
// ==========================================
// This script waits for the DOM content to be fully loaded.
let isRunning = false;
document.addEventListener("DOMContentLoaded", () => {
  // After 1 second (1000 milliseconds), the following function will be executed.
  setTimeout(() => {
    const text = "こんにちは";
    const textPlace = document.querySelector(".japanese");
    let i = 0;

    // This function types out the text one character at a time.
    function typeWriter() {
      // If there are still characters left in the text...
      if (i < text.length) {
        // ...add the next character to the HTML element...
        textPlace.innerHTML += text.charAt(i++);
        // ...and call this function again after 100 milliseconds.
        setTimeout(typeWriter, 100);
      }
    }

    typeWriter();
  }, 1000);
});

// Event listener when mouse hovers to the text element
document.querySelector(".japanese").onmouseover = (event) => {
  if (isRunning) {
    return;
  }
  isRunning = true;
  const japaneseAlphabet =
    "あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみむめもやゆよらりるれろわをん";
  const englishAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  let iterations = 0;
  let isJapanese = true;

  // The `translate` function is used to translate a letter from the Japanese alphabet to the English alphabet.
  const translate = (letter, alphabet) => {
    const index = alphabet.indexOf(letter);
    return index !== -1 ? englishAlphabet[index] : letter;
  };
  // The `interval` function is used to change the text in the target element over time.
  const interval = setInterval(() => {
    // The text in the target element is changed.
    event.target.innerText = event.target.innerText
      .split("")
      .map((letter, index) => {
        // The letter is translated if the index is less than the number of iterations.
        if (index < iterations) {
          return translate(event.target.dataset.value[index], japaneseAlphabet);
        }

        // A random letter from the Japanese or English alphabet is returned.
        if (isJapanese) {
          return japaneseAlphabet[Math.floor(Math.random() * 46)];
        } else {
          return englishAlphabet[Math.floor(Math.random() * 26)];
        }
      })
      .join("");
    hoverTriggered = false;

    // The interval function is cleared and a new timeout function is set if the number of iterations is greater than or equal to the length of the value in the target element's data attribute.
    if (iterations >= event.target.dataset.value.length) {
      clearInterval(interval);

      setTimeout(() => {
        // A new interval function is set to change the text in the target element to random Japanese letters.
        const hackerInterval = setInterval(() => {
          event.target.innerText = Array.from(
            { length: event.target.dataset.value.length },
            () => japaneseAlphabet[Math.floor(Math.random() * 46)]
          ).join("");
        }, 100);

        // The interval function is cleared and the text in the target element is set to "こんにちは".
        setTimeout(() => {
          clearInterval(hackerInterval);
          event.target.innerText = "こんにちは";
          iterations = 0;
          isRunning = false;
        }, 2000);
      }, 2000);
    }

    // The `isJapanese` variable is toggled.
    if (isJapanese) {
      isJapanese = false;
    } else {
      isJapanese = true;
    }

    // The number of iterations is increased.
    iterations += 1 / 3;
  }, 30);
};

// For the moving eyes
// ==========================================
document.addEventListener("mousemove", (e) => {
  const mousex = e.clientX;
  const mousey = e.clientY;

  const anchor = document.querySelector("#anchor");
  const rect = anchor.getBoundingClientRect();
  const anchorX = rect.left + rect.width / 2;
  const anchorY = rect.top + rect.height / 2;

  const eye = document.querySelector("#eye");
  const eyeMaxMove = 10;

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
// ==========================================
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      setTimeout(() => {
        entry.target.classList.add("show");
      }, 200);
    }
  });
});

const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((element) => observer.observe(element));

// For the current year in the footer
// ==========================================
const currentDate = new Date().getFullYear();
document.querySelector("#copyright-date").innerHTML = currentDate;
