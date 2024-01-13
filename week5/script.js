/*
  Title: Main JS file
  Description: This is the main JS file for the website with general code.
  Author: Jetter Garcia
  Created: 01/13/2024 [MM/DD/YYYY]

  Note: By the time I wrote this code, God and I knew how it worked. Now only God knows.

  Hours wasted coding: 0

  Dependencies:
  - None

*/

// Initialization variables for theme
let prefersDarkMode = window.matchMedia("(prefers-color-scheme: dark)");
let theme = ["light-mode", "dark-mode"];

// Initializations variables for navigation
let navigations = ["home", "about", "portfolio"];

function changePage(index) {
  // We loop through each page in the 'navigations' array.
  navigations.forEach((page) => {
    // For each page, we get the corresponding HTML element by its ID.
    var pageElement = document.getElementById(page);

    // We then check if the current page in the loop is the one we want to navigate to.
    // If it is, we set its display style to "block", making it visible.
    // If it's not, we set its display style to "none", hiding it.
    pageElement.style.display = navigations[index] === page ? "block" : "none";
  });
}

document.querySelector("#home").innerHTML = "Hello World!";
