<?php
    $nickname = "Jett";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jetter Garcia</title>
    <meta
      name="description"
      content="A personal portfolio website of Jetter Garcia highlighting his projects and skills"
    />
    <!-- For favicon -->
    <link
      rel="icon"
      href="./assets/images/logo/logo16x16.ico"
      sizes="16x16"
      type="image/ico"
    />
    <link
      rel="icon"
      href="./assets/images/logo/logo32x32.ico"
      sizes="32x32"
      type="image/ico"
    />
    <!-- For socmed platforms -->
    <meta property="og:title" content="Jetter Garcia" />
    <meta
      property="og:description"
      content="A fullstack web developer based in the Philippines"
    />
    <!-- For Twitter -->
    <meta name="twitter:title" content="Jetter Garcia" />
    <meta
      name="twitter:description"
      content="A fullstack web developer based in the Philippines"
    />

    <!-- Related files -->
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <script src="./script.js" defer></script>
    <script src="https://cdn.lordicon.com/lordicon.js" defer></script>
  </head>
  <body class="light-mode">

    <div class="top-bar">
      <a href="#hero">
        <button class="name" onclick="changePage(0)">Jetter Garcia</button>
      </a>
      <div class="toggle-theme-container">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="24"
          viewBox="0 -960 960 960"
          width="24"
        >
          <path
            d="M482.308-160q-133.334 0-226.667-93.333Q162.307-346.667 162.307-480q0-121.539 79.231-210.77Q320.769-780 437.693-796.154q3.23 0 6.346.231 3.115.23 6.115.692-20.231 28.231-32.038 62.808-11.808 34.577-11.808 72.423 0 106.667 74.667 181.333Q555.641-404 662.308-404q38.077 0 72.538-11.808 34.462-11.808 61.923-32.039.462 3 .693 6.116.231 3.115.231 6.346-15.385 116.923-104.616 196.154T482.308-160Z"
          />
        </svg>
        <label class="toggle">
          <input type="checkbox" checked />
          <span class="slider"></span>
        </label>
      </div>
    </div>
    <nav class="navbar">
      <ul>
        <li>
          <button id="home-link" class="active" onclick="changePage(0)">
            <svg
              class="nav-icon"
              xmlns="http://www.w3.org/2000/svg"
              height="24"
              viewBox="0 -960 960 960"
              width="24"
            >
              <path
                d="M240-200h133.847v-201.539q0-15.365 10.394-25.759t25.76-10.394h139.998q15.366 0 25.76 10.394 10.394 10.394 10.394 25.759V-200H720v-353.846q0-3.077-1.346-5.577-1.347-2.5-3.654-4.423L487.308-735q-3.077-2.692-7.308-2.692T472.692-735L245-563.846q-2.307 1.923-3.654 4.423-1.346 2.5-1.346 5.577V-200Zm-59.999 0v-353.846q0-17.173 7.683-32.538 7.683-15.365 21.24-25.307l227.692-171.538q18.953-14.462 43.322-14.462 24.369 0 43.446 14.462l227.692 171.538q13.557 9.942 21.24 25.307 7.683 15.365 7.683 32.538V-200q0 24.538-17.731 42.268-17.73 17.731-42.268 17.731H562.308q-15.365 0-25.76-10.395-10.394-10.394-10.394-25.759v-201.539h-92.308v201.539q0 15.365-10.394 25.759-10.395 10.395-25.76 10.395H240q-24.538 0-42.268-17.731-17.731-17.73-17.731-42.268ZM480-469.231Z"
              />
            </svg>
            <p>Home</p>
          </button>
        </li>
        <li>
          <button id="about-link" onclick="changePage(1)">
            <svg
              class="nav-icon"
              xmlns="http://www.w3.org/2000/svg"
              height="24"
              viewBox="0 -960 960 960"
              width="24"
            >
              <path
                d="M480-492.309q-57.749 0-98.874-41.124-41.125-41.125-41.125-98.874 0-57.75 41.125-98.874 41.125-41.125 98.874-41.125 57.749 0 98.874 41.125 41.125 41.124 41.125 98.874 0 57.749-41.125 98.874-41.125 41.124-98.874 41.124ZM180.001-187.694v-88.922q0-29.384 15.962-54.422 15.961-25.038 42.653-38.5 59.308-29.077 119.654-43.615T480-427.691q61.384 0 121.73 14.538 60.346 14.538 119.654 43.615 26.692 13.462 42.653 38.5 15.962 25.038 15.962 54.422v88.922H180.001ZM240-247.693h480v-28.923q0-12.154-7.039-22.5-7.038-10.346-19.115-16.885-51.692-25.461-105.418-38.577Q534.702-367.693 480-367.693t-108.428 13.115q-53.726 13.116-105.418 38.577-12.077 6.539-19.115 16.885Q240-288.77 240-276.616v28.923Zm240-304.614q33 0 56.5-23.5t23.5-56.5q0-33-23.5-56.5t-56.5-23.5q-33 0-56.5 23.5t-23.5 56.5q0 33 23.5 56.5t56.5 23.5Zm0-80Zm0 384.614Z"
              />
            </svg>
            <p>About</p>
          </button>
        </li>
        <li>
          <button id="portfolio-link" onclick="changePage(2)">
            <svg
              class="nav-icon"
              xmlns="http://www.w3.org/2000/svg"
              height="24"
              viewBox="0 -960 960 960"
              width="24"
            >
              <path
                d="M172.309-140.001q-30.308 0-51.308-21t-21-51.308v-415.382q0-30.308 21-51.308t51.308-21h167.692v-67.691q0-30.307 21-51.307 21-21 51.308-21h135.382q30.308 0 51.308 21t21 51.307v67.691h167.692q30.308 0 51.308 21t21 51.308v415.382q0 30.308-21 51.308t-51.308 21H172.309Zm0-59.999h615.382q4.616 0 8.463-3.846 3.846-3.847 3.846-8.463v-415.382q0-4.616-3.846-8.463-3.847-3.846-8.463-3.846H172.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v415.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846ZM400-699.999h160v-67.691q0-4.616-3.846-8.462-3.847-3.847-8.463-3.847H412.309q-4.616 0-8.463 3.847Q400-772.306 400-767.69v67.691ZM160-200V-640-200Z"
              />
            </svg>
            <p>Portfolio</p>
          </button>
        </li>
        <li>
          <button id="contact-link" onclick="changePage(3)">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="24"
              viewBox="0 -960 960 960"
              width="24"
            >
              <path
                d="M777.614-140.001q-113.076 0-227.191-52.577-114.115-52.577-209.691-148.346-95.577-95.769-148.154-209.691-52.577-113.923-52.577-226.999 0-18.165 12-30.275t30-12.11h130.46q15.154 0 26.731 9.885 11.577 9.885 14.73 24.423L376.845-668q2.385 16.385-1 28.154-3.384 11.769-12.154 19.769l-92.384 89.923q22.308 40.846 50.962 77.269 28.654 36.424 62.038 69.578 32.924 32.923 70.001 61.154 37.077 28.231 80.077 52.538l89.769-90.538q9.385-9.769 22.731-13.692 13.346-3.923 27.731-1.923l111.075 22.615q15.154 4 24.731 15.461 9.577 11.462 9.577 26.001v129.69q0 18-12.11 30t-30.275 12ZM242.923-586.922l71.385-68.308q1.923-1.539 2.5-4.231.577-2.693-.192-5l-17.385-89.385q-.769-3.077-2.692-4.615-1.923-1.539-5-1.539H206q-2.307 0-3.846 1.539-1.539 1.538-1.539 3.846 3.077 41 13.423 83.308 10.347 42.308 28.885 84.385Zm347.999 345.691q39.77 18.539 82.962 28.347 43.193 9.807 80.731 11.653 2.308 0 3.846-1.538 1.539-1.539 1.539-3.847v-84.153q0-3.077-1.539-5.001-1.538-1.923-4.615-2.692l-84-17.077q-2.307-.769-4.038-.192-1.731.577-3.654 2.5l-71.232 72ZM242.923-586.922Zm347.999 345.691Z"
              />
            </svg>
            <p>Contact</p>
          </button>
        </li>
      </ul>
    </nav>
    <div id="content">
      <section class="show" id="home">
        <section class="hero" id="hero">
          <div class="left">
            <div class="container">
              <p class="big-hero-text">
                <span>Crafting Code to</span>
                <span>Build the <span class="colored">Future</span></span>
              </p>
              <p class="description">
                Explore my coding adventure through projects that I've been
                working on. Through the passion and dedication, I consider each
                line of code as an art, meticulously crafted to breathe life
                into innovative solutions
              </p>
              <div class="button-container">
                <button class="primary" onclick="changePage(2)">
                  View Projects
                </button>
                <button class="secondary" onclick="changePage(3)">
                  Get in Touch
                </button>
              </div>
            </div>
          </div>
          <div class="right">
            <div class="moving-eye">
              <div class="moving-eye-container">
                <img
                  id="anchor"
                  src="./assets/images/face.png"
                  alt="A big round circle"
                />
                <img
                  id="eye"
                  src="./assets/images/eyes.png"
                  alt="Big rounded eyes"
                  style="top: 2.8rem; right: 3rem"
                />
              </div>
            </div>
          </div>
        </section>
        <section class="things-i-do">
          <h2>Some Things that I Do</h2>
          <div class="container">
            <div class="card 1 light">
              <lord-icon
                src="https://cdn.lordicon.com/oqaajvyl.json"
                trigger="loop"
                delay="2000"
                colors="primary:#65a0f8,secondary:#65a0f8"
              >
              </lord-icon>
              <p class="title">UI &#8739; UX Design</p>
              <p class="desc">
                Elevating digital experiences through aesthetically pleasing and
                user-friendly interfaces.
              </p>
            </div>
            <div class="card 2 light">
              <lord-icon
                src="https://cdn.lordicon.com/ipbtscff.json"
                trigger="loop"
                delay="2000"
                colors="primary:#65a0f8,secondary:#65a0f8"
              >
              </lord-icon>
              <p class="title">Programming</p>
              <p class="desc">
                Transforming concepts into reality with responsive and efficient
                code in align to best practices.
              </p>
            </div>
            <div class="card 3 light">
              <lord-icon
                src="https://cdn.lordicon.com/pgveulug.json"
                trigger="loop"
                delay="2000"
                colors="primary:#65a0f8,secondary:#65a0f8"
              >
              </lord-icon>
              <p class="title">Deployment</p>
              <p class="desc">
                Ensuring efficient delivery of applications to live environments
                for optimal user access.
              </p>
            </div>
          </div>
        </section>
        <section class="how-i-work">
          <h2>How I Work Through a Project</h2>
          <div class="container">
            <div class="left">
              <button class="current work-button" onclick="toggleContent(0)">
                Planning
              </button>
              <button class="work-button" onclick="toggleContent(1)">
                Design
              </button>
              <button class="work-button" onclick="toggleContent(2)">
                Development
              </button>
              <button class="work-button" onclick="toggleContent(3)">
                Deployment
              </button>
            </div>
            <div class="right">
              <div class="show planning">
                <p>
                  During the planning phase, the project kicks off by clearly
                  defining its goals and requirements. This involves pinpointing
                  the specific objectives, such as enhancing user engagement or
                  promoting a product, to provide direction. Simultaneously,
                  understanding the target audience through market research
                  ensures a tailored online experience.
                </p>
                <p>
                  The next step involves identifying key features essential for
                  achieving the project goals. This straightforward approach
                  sets the foundation for a well-defined project scope and
                  ensures the website resonates effectively with its intended
                  users.
                </p>
              </div>

              <div class="hide design">
                <p>
                  The design phase begins with creating wireframes and design
                  mockups. This step involves sketching out the basic layout and
                  structure of the website to visualize its functionality and
                  user interface. These wireframes serve as a blueprint for the
                  development process. Following this, the design mockups are
                  crafted, incorporating colors, typography, and visual elements
                  to give a realistic representation of the final product.
                </p>
                <p>
                  Simultaneously, design guidelines are plotted, ensuring
                  consistency in aesthetics and user experience across the
                  website. This meticulous planning in the design phase lays the
                  groundwork for a visually appealing and user-friendly website
                  that aligns seamlessly with the client's objectives and
                  preferences.
                </p>
              </div>

              <div class="hide development">
                <p>
                  Moving into the development phase, the initial step is setting
                  up a version control system, ensuring a systematic and
                  collaborative approach to coding. This allows for efficient
                  tracking of changes and collaboration among team members.
                </p>
                <p>
                  The development phase begins by building the frontend,
                  creating the user interface, and visual elements.
                  Simultaneously, the backend and API development establish the
                  functional backbone, ensuring a seamless integration between
                  the user interface and infrastructure. Adhering to best
                  practices and utilizing a systematic version control system,
                  this phase results in a stable and scalable website, meeting
                  the project goals.
                </p>
              </div>

              <div class="hide deployment">
                <p>
                  As the development phase concludes, the focus shifts towards
                  deployment. The first step involves setting up the production
                  environment, configuring servers, and ensuring all necessary
                  resources are in place for a smooth transition from
                  development to live deployment.
                </p>
                <p>
                  Following this, the application is deployed, making it
                  accessible to users on the internet. This process involves
                  transferring the developed code and assets to the production
                  servers, configuring databases, and addressing any potential
                  issues to ensure a seamless user experience. By meticulously
                  setting up the production environment and deploying the
                  application, the web development service ensures that the
                  website is ready for real-world use, meeting the defined goals
                  and providing a reliable online presence for its users.
                </p>
              </div>
            </div>
          </div>

        </section>
      </section>
      <section class="hide" id="about">
        <p class="placeholder">Coming Soon 😊</p>
      </section>
      <section class="hide" id="portfolio">
        <p class="placeholder">Coming Soon 😊</p>
      </section>
      <section class="hide" id="contact">
        <p class="placeholder">Coming Soon 😊</p>
      </section>
    </div>
    <?php
    echo "<h2>PHP is Fun!</h2>";
    ?>
  </body>
</html>
