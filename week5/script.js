/*
  Title: Main JS file
  Description: This is the main JS file for the website with general code.
  Author: Jetter Garcia
  Created: 01/13/2024 [MM/DD/YYYY]

  Note: By the time I wrote this code, God and I knew how it worked. Now, only God knows.

  Hours wasted coding: 2

  Dependencies:
  - None

*/

// Initializations variables for navigation
let navigations = ["home", "about", "portfolio", "contact"];
let navLinks = [
  "#home-link",
  "#about-link",
  "#portfolio-link",
  "#contact-link",
];

function changePage(index) {
  // We loop through each page in the 'navigations' array.
  navigations.forEach((page) => {
    // For each page, we get the corresponding HTML element by its ID.
    let pageElement = document.getElementById(page);

    // We then check if the current page in the loop is the one we want to navigate to.
    // If it is, we set its display style to "block", making it visible.
    // If it's not, we set its display style to "none", hiding it.
    pageElement.style.display = navigations[index] === page ? "block" : "none";
  });

  navLinks.forEach((link) => {
    // For each link, we get the corresponding HTML element by its ID
    let linkElement = document.querySelector(link);

    // We then check if the current link in the loop is the one we want to navigated to.
    if (navLinks[index] === link) {
      linkElement.classList.add("active");
    } else {
      linkElement.classList.remove("active");
    }
  });
}

// This variable is for gettign the preferred theme from the local storage of the user
let prefersDarkMode = localStorage.getItem("prefersDarkMode");

// Get the elements from the DOM for changing the theme
const toggleSwitch = document.querySelector('.toggle input[type="checkbox"]');
const body = document.querySelector("body");
const slider = document.querySelector(".slider");

document.addEventListener("DOMContentLoaded", (e) => {
  // We check if the user has a preferred theme
  if (prefersDarkMode === "true") {
    // If the user has a preferred theme, we set the theme to the preferred theme
    toggleSwitch.checked = true;
    body.classList.remove("light-mode");
    body.classList.add("dark-mode");
  } else {
    // If the user doesn't have a preferred theme, we set the theme to the default theme
    toggleSwitch.checked = false;
  }
});

toggleSwitch.addEventListener("change", switchTheme, true);

function switchTheme(e) {
  if (e.target.checked !== true) {
    body.classList.remove("dark-mode");
    body.classList.add("light-mode");
    slider.classList.add("light");
    localStorage.setItem("prefersDarkMode", "false");
    toggleSwitch.checked = false;
  } else {
    body.classList.remove("light-mode");
    body.classList.add("dark-mode");
    slider.classList.remove("light");
    localStorage.setItem("prefersDarkMode", "true");
    toggleSwitch.checked = true;
  }
}

// For the moving eyes
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

// For the anime list

class Anime {
  constructor(title, episodes, genre, releaseDate) {
    this.title = title;
    this.episodes = episodes;
    this.genre = genre;
    this.releaseDate = releaseDate;
  }
}

const anime1 = new Anime(
  "Just Because!",
  12,
  "Romance, School",
  "October 5, 2017"
);

window.mousex = 42;
console.log(window.mousex);
