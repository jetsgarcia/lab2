<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jetter Garcia</title>
  <meta name="description"
    content="A personal portfolio website of Jetter Garcia highlighting his projects and skills" />
  <!-- For favicon -->
  <link rel="icon" href="./assets/images/logo/logo16x16.ico" sizes="16x16" type="image/ico" />
  <link rel="icon" href="./assets/images/logo/logo32x32.ico" sizes="32x32" type="image/ico" />
  <!-- For socmed platforms -->
  <meta property="og:title" content="Jetter Garcia" />
  <meta property="og:description" content="A fullstack web developer based in the Philippines" />
  <!-- For Twitter -->
  <meta name="twitter:title" content="Jetter Garcia" />
  <meta name="twitter:description" content="A fullstack web developer based in the Philippines" />

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
      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
        <path
          d="M482.308-160q-133.334 0-226.667-93.333Q162.307-346.667 162.307-480q0-121.539 79.231-210.77Q320.769-780 437.693-796.154q3.23 0 6.346.231 3.115.23 6.115.692-20.231 28.231-32.038 62.808-11.808 34.577-11.808 72.423 0 106.667 74.667 181.333Q555.641-404 662.308-404q38.077 0 72.538-11.808 34.462-11.808 61.923-32.039.462 3 .693 6.116.231 3.115.231 6.346-15.385 116.923-104.616 196.154T482.308-160Z" />
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
          <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
            <path
              d="M240-200h133.847v-201.539q0-15.365 10.394-25.759t25.76-10.394h139.998q15.366 0 25.76 10.394 10.394 10.394 10.394 25.759V-200H720v-353.846q0-3.077-1.346-5.577-1.347-2.5-3.654-4.423L487.308-735q-3.077-2.692-7.308-2.692T472.692-735L245-563.846q-2.307 1.923-3.654 4.423-1.346 2.5-1.346 5.577V-200Zm-59.999 0v-353.846q0-17.173 7.683-32.538 7.683-15.365 21.24-25.307l227.692-171.538q18.953-14.462 43.322-14.462 24.369 0 43.446 14.462l227.692 171.538q13.557 9.942 21.24 25.307 7.683 15.365 7.683 32.538V-200q0 24.538-17.731 42.268-17.73 17.731-42.268 17.731H562.308q-15.365 0-25.76-10.395-10.394-10.394-10.394-25.759v-201.539h-92.308v201.539q0 15.365-10.394 25.759-10.395 10.395-25.76 10.395H240q-24.538 0-42.268-17.731-17.731-17.73-17.731-42.268ZM480-469.231Z" />
          </svg>
          <p>Home</p>
        </button>
      </li>
      <li>
        <button id="about-link" onclick="changePage(1)">
          <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
            <path
              d="M480-492.309q-57.749 0-98.874-41.124-41.125-41.125-41.125-98.874 0-57.75 41.125-98.874 41.125-41.125 98.874-41.125 57.749 0 98.874 41.125 41.125 41.124 41.125 98.874 0 57.749-41.125 98.874-41.125 41.124-98.874 41.124ZM180.001-187.694v-88.922q0-29.384 15.962-54.422 15.961-25.038 42.653-38.5 59.308-29.077 119.654-43.615T480-427.691q61.384 0 121.73 14.538 60.346 14.538 119.654 43.615 26.692 13.462 42.653 38.5 15.962 25.038 15.962 54.422v88.922H180.001ZM240-247.693h480v-28.923q0-12.154-7.039-22.5-7.038-10.346-19.115-16.885-51.692-25.461-105.418-38.577Q534.702-367.693 480-367.693t-108.428 13.115q-53.726 13.116-105.418 38.577-12.077 6.539-19.115 16.885Q240-288.77 240-276.616v28.923Zm240-304.614q33 0 56.5-23.5t23.5-56.5q0-33-23.5-56.5t-56.5-23.5q-33 0-56.5 23.5t-23.5 56.5q0 33 23.5 56.5t56.5 23.5Zm0-80Zm0 384.614Z" />
          </svg>
          <p>About</p>
        </button>
      </li>
      <li>
        <button id="portfolio-link" onclick="changePage(2)">
          <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
            <path
              d="M172.309-140.001q-30.308 0-51.308-21t-21-51.308v-415.382q0-30.308 21-51.308t51.308-21h167.692v-67.691q0-30.307 21-51.307 21-21 51.308-21h135.382q30.308 0 51.308 21t21 51.307v67.691h167.692q30.308 0 51.308 21t21 51.308v415.382q0 30.308-21 51.308t-51.308 21H172.309Zm0-59.999h615.382q4.616 0 8.463-3.846 3.846-3.847 3.846-8.463v-415.382q0-4.616-3.846-8.463-3.847-3.846-8.463-3.846H172.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v415.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846ZM400-699.999h160v-67.691q0-4.616-3.846-8.462-3.847-3.847-8.463-3.847H412.309q-4.616 0-8.463 3.847Q400-772.306 400-767.69v67.691ZM160-200V-640-200Z" />
          </svg>
          <p>Portfolio</p>
        </button>
      </li>
      <li>
        <button id="contact-link" onclick="changePage(3)">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
            <path
              d="M777.614-140.001q-113.076 0-227.191-52.577-114.115-52.577-209.691-148.346-95.577-95.769-148.154-209.691-52.577-113.923-52.577-226.999 0-18.165 12-30.275t30-12.11h130.46q15.154 0 26.731 9.885 11.577 9.885 14.73 24.423L376.845-668q2.385 16.385-1 28.154-3.384 11.769-12.154 19.769l-92.384 89.923q22.308 40.846 50.962 77.269 28.654 36.424 62.038 69.578 32.924 32.923 70.001 61.154 37.077 28.231 80.077 52.538l89.769-90.538q9.385-9.769 22.731-13.692 13.346-3.923 27.731-1.923l111.075 22.615q15.154 4 24.731 15.461 9.577 11.462 9.577 26.001v129.69q0 18-12.11 30t-30.275 12ZM242.923-586.922l71.385-68.308q1.923-1.539 2.5-4.231.577-2.693-.192-5l-17.385-89.385q-.769-3.077-2.692-4.615-1.923-1.539-5-1.539H206q-2.307 0-3.846 1.539-1.539 1.538-1.539 3.846 3.077 41 13.423 83.308 10.347 42.308 28.885 84.385Zm347.999 345.691q39.77 18.539 82.962 28.347 43.193 9.807 80.731 11.653 2.308 0 3.846-1.538 1.539-1.539 1.539-3.847v-84.153q0-3.077-1.539-5.001-1.538-1.923-4.615-2.692l-84-17.077q-2.307-.769-4.038-.192-1.731.577-3.654 2.5l-71.232 72ZM242.923-586.922Zm347.999 345.691Z" />
          </svg>
          <p>Contact</p>
        </button>
      </li>
    </ul>
  </nav>
  <div id="content">
    <section class="show" id="home">
      <section class="hero" id="hero">
        <div class="outermost-container">
          <div class="left">
            <div class="container">
              <p class="big-hero-text">
                <span>Crafting Code to</span>
                <span>Build the <span class="colored">Future</span></span>
              </p>
              <p class="description">
                Explore my coding adventure through projects that I've been
                working on. Through the passion and dedication, I consider
                each line of code as an art, meticulously crafted to breathe
                life into innovative solutions
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
                <img id="anchor" src="./assets/images/face.png" alt="A big round circle" />
                <img id="eye" src="./assets/images/eyes.png" alt="Big rounded eyes" style="top: 2.8rem; right: 3rem" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="things-i-do">
        <h2>Some Things that I Do</h2>
        <div class="container">
          <div class="card 1 light">
            <lord-icon src="https://cdn.lordicon.com/oqaajvyl.json" trigger="loop" delay="2000"
              colors="primary:#65a0f8,secondary:#65a0f8">
            </lord-icon>
            <p class="title">UI &#8739; UX Design</p>
            <p class="desc">
              Elevating digital experiences through aesthetically pleasing and
              user-friendly interfaces.
            </p>
          </div>
          <div class="card 2 light">
            <lord-icon src="https://cdn.lordicon.com/ipbtscff.json" trigger="loop" delay="2000"
              colors="primary:#65a0f8,secondary:#65a0f8">
            </lord-icon>
            <p class="title">Programming</p>
            <p class="desc">
              Transforming concepts into reality with responsive and efficient
              code in align to best practices.
            </p>
          </div>
          <div class="card 3 light">
            <lord-icon src="https://cdn.lordicon.com/pgveulug.json" trigger="loop" delay="2000"
              colors="primary:#65a0f8,secondary:#65a0f8">
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
      <section class="contact-cta">
        <h2>Let's Transform Ideas Into Reality!</h2>
        <p>
          Let's combine our skills and create digital magic together, forging
          a partnership where creativity and technical prowess collide
        </p>
        <button onclick="changePage(3)">Let's Collaborate</button>
      </section>
    </section>
    <section class="hide" id="about">
      <div class="container">
        <div class="pic">
          <img src="./assets/images/jetter.jpg" alt="Jetter Garcia's image" height="400" width="400" />
        </div>
        <div class="desc">
          <h2>Call Me Jett &#128513;</h2>
          <p class="intro hidden">
            I'm an aspiring <strong>fullstack web developer.</strong>
          </p>
          <p class="biography hidden">
            I find joy in exploring new ideas and perspectives, always looking
            to bring a fresh, innovative outlook to every challenge. I love
            connecting with like-minded people and building meaningful
            relationships with them, fostering a collaborative spirit wherever
            I go.
          </p>
          <p class="details hidden">
            <span class="label">Location:</span> Philippines
          </p>
          <p class="details hidden">
            <span class="label">Timezone:</span> GMT/UTC&nbsp;&plus;08:00
          </p>
          <p class="details hidden">
            <span class="label">Languages:</span> English, Filipino
          </p>
        </div>
      </div>
    </section>
    <section class="hide" id="portfolio">
      <p class="placeholder">Coming Soon 😊</p>
    </section>
    <section class="hide" id="contact">
      <section class="email">
        <div class="container">
          <div class="left">
            <h2>Get In Touch</h2>
            <p class="description">
              Whether you have questions about me or just want to say hello,
              I'm here to listen. I'll get back to you as soon as possible.
              Alternatively, you can reach me through the provided contact
              details.
            </p>

            <div class="alternative-contact">
              <p>
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 11L4 6H20ZM20 18H4V8L12 13L20 8V18Z" />
                </svg>
                jlgarcia2@student.apc.edu.ph
              </p>
              <p>
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M6.54 5C6.6 5.89 6.75 6.76 6.99 7.59L5.79 8.79C5.38 7.59 5.12 6.32 5.03 5H6.54ZM16.4 17.02C17.25 17.26 18.12 17.41 19 17.47V18.96C17.68 18.87 16.41 18.61 15.2 18.21L16.4 17.02ZM7.5 3H4C3.45 3 3 3.45 3 4C3 13.39 10.61 21 20 21C20.55 21 21 20.55 21 20V16.51C21 15.96 20.55 15.51 20 15.51C18.76 15.51 17.55 15.31 16.43 14.94C16.33 14.9 16.22 14.89 16.12 14.89C15.86 14.89 15.61 14.99 15.41 15.18L13.21 17.38C10.38 15.93 8.06 13.62 6.62 10.79L8.82 8.59C9.1 8.31 9.18 7.92 9.07 7.57C8.7 6.45 8.5 5.25 8.5 4C8.5 3.45 8.05 3 7.5 3Z" />
                </svg>

                &plus;639273511813
              </p>
            </div>
            <div class="socmed">
              <a href="https://github.com/jetsgarcia" target="_blank">
                <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16 2.99561C8.63329 2.99561 2.66663 8.96227 2.66663 16.3289C2.66663 22.2289 6.48329 27.2123 11.7833 28.9789C12.45 29.0956 12.7 28.6956 12.7 28.3456C12.7 28.0289 12.6833 26.9789 12.6833 25.8623C9.33329 26.4789 8.46663 25.0456 8.19996 24.2956C8.04996 23.9123 7.39996 22.7289 6.83329 22.4123C6.36663 22.1623 5.69996 21.5456 6.81663 21.5289C7.86663 21.5123 8.61663 22.4956 8.86663 22.8956C10.0666 24.9123 11.9833 24.3456 12.75 23.9956C12.8666 23.1289 13.2166 22.5456 13.6 22.2123C10.6333 21.8789 7.53329 20.7289 7.53329 15.6289C7.53329 14.1789 8.04996 12.9789 8.89996 12.0456C8.76663 11.7123 8.29996 10.3456 9.03329 8.51227C9.03329 8.51227 10.15 8.16227 12.7 9.87894C13.7666 9.57894 14.9 9.42894 16.0333 9.42894C17.1666 9.42894 18.3 9.57894 19.3666 9.87894C21.9166 8.14561 23.0333 8.51227 23.0333 8.51227C23.7666 10.3456 23.3 11.7123 23.1666 12.0456C24.0166 12.9789 24.5333 14.1623 24.5333 15.6289C24.5333 20.7456 21.4166 21.8789 18.45 22.2123C18.9333 22.6289 19.35 23.4289 19.35 24.6789C19.35 26.4623 19.3333 27.8956 19.3333 28.3456C19.3333 28.6956 19.5833 29.1123 20.25 28.9789C22.8969 28.0854 25.1969 26.3842 26.8264 24.115C28.4558 21.8457 29.3326 19.1226 29.3333 16.3289C29.3333 8.96227 23.3666 2.99561 16 2.99561Z" />
                </svg>
              </a>
              <a href="https://www.linkedin.com/in/jetter-garcia/" target="_blank">
                <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M28 5.76471V26.2353C28 26.7033 27.8141 27.1522 27.4831 27.4831C27.1522 27.8141 26.7033 28 26.2353 28H5.76471C5.29668 28 4.84782 27.8141 4.51687 27.4831C4.18592 27.1522 4 26.7033 4 26.2353V5.76471C4 5.29668 4.18592 4.84782 4.51687 4.51687C4.84782 4.18592 5.29668 4 5.76471 4H26.2353C26.7033 4 27.1522 4.18592 27.4831 4.51687C27.8141 4.84782 28 5.29668 28 5.76471V5.76471ZM11.0588 13.1765H7.52941V24.4706H11.0588V13.1765ZM11.3765 9.29412C11.3783 9.02715 11.3276 8.76242 11.2271 8.51506C11.1267 8.2677 10.9785 8.04255 10.791 7.85246C10.6036 7.66237 10.3805 7.51107 10.1346 7.4072C9.88861 7.30332 9.62462 7.24891 9.35765 7.24706H9.29412C8.7512 7.24706 8.23053 7.46273 7.84663 7.84663C7.46273 8.23053 7.24706 8.7512 7.24706 9.29412C7.24706 9.83703 7.46273 10.3577 7.84663 10.7416C8.23053 11.1255 8.7512 11.3412 9.29412 11.3412V11.3412C9.56111 11.3477 9.82678 11.3016 10.0759 11.2055C10.3251 11.1094 10.5529 10.9651 10.7463 10.7809C10.9396 10.5967 11.0948 10.3762 11.203 10.132C11.3111 9.88776 11.3701 9.62464 11.3765 9.35765V9.29412ZM24.4706 17.6094C24.4706 14.2141 22.3106 12.8941 20.1647 12.8941C19.4621 12.8589 18.7625 13.0086 18.1358 13.3281C17.5091 13.6477 16.9771 14.126 16.5929 14.7153H16.4941V13.1765H13.1765V24.4706H16.7059V18.4635C16.6549 17.8483 16.8487 17.2378 17.2452 16.7646C17.6417 16.2915 18.2089 15.9939 18.8235 15.9365H18.9576C20.08 15.9365 20.9129 16.6424 20.9129 18.4212V24.4706H24.4424L24.4706 17.6094Z" />
                </svg>
              </a>
              <a href="https://www.facebook.com/jetter.garcia.35" target="_blank">
                <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M29.3334 16.0809C29.3334 8.67202 23.3645 2.66669 16 2.66669C8.63558 2.66669 2.66669 8.67202 2.66669 16.0809C2.66669 22.7778 7.54135 28.3271 13.9165 29.3334V19.9591H10.5316V16.08H13.9165V13.1254C13.9165 9.76358 15.9067 7.9058 18.9529 7.9058C20.4107 7.9058 21.9378 8.16802 21.9378 8.16802V11.4694H20.2551C18.5991 11.4694 18.0836 12.504 18.0836 13.5654V16.0809H21.7814L21.1902 19.9582H18.0836V29.3334C24.4587 28.3271 29.3334 22.7778 29.3334 16.0809Z" />
                </svg>
              </a>
              <a href="discordapp.com/users/757208025218941040">
                <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M25.2411 7.52194C23.5415 6.74207 21.7189 6.1675 19.8132 5.83842C19.7785 5.83207 19.7439 5.84794 19.726 5.87968C19.4916 6.29659 19.2319 6.84047 19.0501 7.26797C17.0005 6.96111 14.9613 6.96111 12.9537 7.26797C12.7719 6.83097 12.5028 6.29659 12.2673 5.87968C12.2494 5.849 12.2148 5.83312 12.1801 5.83842C10.2755 6.16645 8.45287 6.74102 6.75217 7.52194C6.73745 7.52829 6.72483 7.53888 6.71645 7.55263C3.25934 12.7175 2.3123 17.7554 2.77689 22.7308C2.77899 22.7551 2.79265 22.7784 2.81157 22.7932C5.09247 24.4683 7.30192 25.4852 9.47033 26.1592C9.50503 26.1698 9.5418 26.1571 9.56389 26.1285C10.0768 25.428 10.5341 24.6895 10.9261 23.9127C10.9492 23.8673 10.9272 23.8133 10.8799 23.7953C10.1546 23.5202 9.46402 23.1847 8.79972 22.8038C8.74718 22.7731 8.74297 22.698 8.79131 22.662C8.9311 22.5572 9.07093 22.4483 9.20441 22.3382C9.22857 22.3181 9.26222 22.3139 9.29061 22.3266C13.6548 24.3191 18.3795 24.3191 22.6922 22.3266C22.7206 22.3128 22.7542 22.3171 22.7794 22.3372C22.913 22.4472 23.0528 22.5572 23.1936 22.662C23.2419 22.698 23.2388 22.7731 23.1862 22.8038C22.5219 23.1921 21.8313 23.5202 21.105 23.7942C21.0577 23.8122 21.0367 23.8673 21.0599 23.9127C21.4603 24.6884 21.9175 25.427 22.421 26.1275C22.442 26.1571 22.4799 26.1698 22.5146 26.1592C24.6935 25.4852 26.9029 24.4683 29.1838 22.7932C29.2038 22.7784 29.2164 22.7562 29.2185 22.7319C29.7746 16.9797 28.2872 11.9831 25.2758 7.55368C25.2685 7.53888 25.2559 7.52829 25.2411 7.52194ZM11.5778 19.7013C10.2639 19.7013 9.18128 18.495 9.18128 17.0136C9.18128 15.5322 10.2429 14.3259 11.5778 14.3259C12.9232 14.3259 13.9954 15.5427 13.9743 17.0136C13.9743 18.495 12.9127 19.7013 11.5778 19.7013ZM20.4386 19.7013C19.1248 19.7013 18.0421 18.495 18.0421 17.0136C18.0421 15.5322 19.1037 14.3259 20.4386 14.3259C21.7841 14.3259 22.8562 15.5427 22.8352 17.0136C22.8352 18.495 21.7841 19.7013 20.4386 19.7013Z" />
                </svg>
              </a>
            </div>
          </div>
          <div class="right">
            <?php
            $firstname = $lastname = $email = $subject = $message = "";
            ?>
            <form method="post" action="submit.php">
              <div class="full-name">
                <input class="first-name" type="text" name="fname" value="<?php echo $firstname; ?>"
                  placeholder="First Name" required>

                <input class="last-name" type="text" name="lname" value="<?php echo $lastname; ?>"
                  placeholder="Last Name" required>
              </div>

              <input class="mb-1" type="email" name="email" value="<?php echo $email; ?>" placeholder="Email" required>

              <input class="mb-1" type="text" name="subject" value="<?php echo $subject; ?>" placeholder="Subject"
                required>

              <textarea class="mb-1" id="message" name="message" rows="4" required
                placeholder="Message"><?php echo $message; ?></textarea>

              <div class="submit-button-container">
                <input type="submit" value="Submit" name="submit" />
              </div>
            </form>

          </div>
        </div>
      </section>
      <section class="map">
        <h2>You might find me in this place</h2>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.1900775216272!2d121.01874007409646!3d14.531117578776046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c93018658925%3A0x6de8e16ad051b59e!2sAsia%20Pacific%20College!5e0!3m2!1sen!2sph!4v1706327962946!5m2!1sen!2sph"
          width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>
    </section>
  </div>
  <footer>
    &copy; <span class="date-year"></span> Jetter Garcia. All Rights Reserved
  </footer>
  <script>
    const year = new Date().getFullYear();
    document.querySelector(".date-year").innerHTML = year;
  </script>
</body>

</html>