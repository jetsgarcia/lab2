// For the text effect
const japaneseAlphabet =
  "あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみむめもやゆよらりるれろわをん";
const englishAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
let iterations = 0;
let timeoutId;
let isJapanese = true;

document.querySelector(".japanese").onmouseover = (event) => {
  clearTimeout(timeoutId);

  const translate = (letter, alphabet) => {
    const index = alphabet.indexOf(letter);
    return index !== -1 ? englishAlphabet[index] : letter;
  };

  const interval = setInterval(() => {
    event.target.innerText = event.target.innerText
      .split("")
      .map((letter, index) => {
        if (index < iterations) {
          return translate(event.target.dataset.value[index], japaneseAlphabet);
        }

        if (isJapanese) {
          return japaneseAlphabet[Math.floor(Math.random() * 46)];
        } else {
          return englishAlphabet[Math.floor(Math.random() * 26)];
        }
      })
      .join("");

    if (iterations >= event.target.dataset.value.length) {
      clearInterval(interval);

      timeoutId = setTimeout(() => {
        const hackerInterval = setInterval(() => {
          event.target.innerText = Array.from(
            { length: event.target.dataset.value.length },
            () => japaneseAlphabet[Math.floor(Math.random() * 46)]
          ).join("");
        }, 100);

        setTimeout(() => {
          clearInterval(hackerInterval);
          event.target.innerText = "こんにちは";
          iterations = 0;
        }, 2000);
      }, 2000);
    }

    // change to false if the text is already in english
    if (isJapanese) {
      isJapanese = false;
    } else {
      isJapanese = true;
    }

    iterations += 1 / 3;
  }, 30);
};

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
