<?php
require_once 'functions.php';
$conn = connectDatabase();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['cont-fname'];
    $lname = $_POST['cont-lname'];
    $email = $_POST['cont-email'];
    $mobile = $_POST['cont-mobile'];
    $message = $_POST['cont-message'];

    $sql = "INSERT INTO contact_entries (first_name, last_name, email, mobile, message) 
            VALUES ('$fname', '$lname', '$email', '$mobile', '$message')";


if ($conn->query($sql) === TRUE) {
  // Set success message
  $successMessage = "The Message Sent Successfully!";
} else {
  // Set error message
  $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>My Website</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>R</span>isfath <span>A</span>hamed</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul id="nav-links">
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            <li id="login-link"><a href="./form.php" data-after="Login">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>My Name is <span></span></h1>
        <h1>Risfath Ahamed <span></span></h1>
        <dev class="text-3">And I'm a <span class="typing"></span></dev>
        <br>
        <a href="https://t.ly/Ww9vA" type="button" class="cta">Portfolio</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Se<span>R</span>vices</h1>
        <p>We offer a complete range of services for your digital portfolio. Our expertise includes graphic design, web development, UI/UX design, and social media promotions. From captivating designs to seamless functionality, we ensure your brand stands out. Trust us to enhance your online presence and engage your audience effectively.</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="./img/graphic-design.svg" /></div>
          <h2>Graphic Design</h2>
          <p>we take pride in offering a comprehensive suite of services to cater to all your digital needs. 
            Our graphic design expertise ensures visually stunning and captivating designs that will make your brand shine. 
            From logos and brand identity to brochures and marketing collateral, we will bring your vision to life.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="./img/wd.png" /></div>
          <h2>Web  Development</h2>
          <p>our professionals are well-versed in the latest technologies and trends. We create responsive and user-friendly websites that not only look great but also provide seamless functionality and an exceptional user experience. Whether you need a simple informative site or a complex e-commerce platform, we have the expertise to deliver results.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="./img/UIUX.png" /></div>
          <h2>UI/UX design</h2>
          <p>owe focus on crafting interfaces that are intuitive, visually appealing, and optimized for user engagement. 
            We understand the importance of user-centered design and employ research-based methodologies to create interfaces that delight 
            your audience and drive conversions. From wireframing to prototyping and usability testing.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="./img/sm.png" /></div>
          <h2>Social Media Promo</h2>
          <p>In today's digital age, social media plays a crucial role in brand promotion and audience engagement. 
            Our social media promotion services help you harness the power of platforms like Facebook, Instagram, Twitter, and LinkedIn 
            to build your brand presence, and drive targeted traffic to your website.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Graphic Design</h1>
            <h2>Graphic design is the art of visuals</h2>
            <p>The "InFocus Media Oficial Media Unit Rajarata University of Sri Lanka Page: 2023 Colours Winners" is a visually stunning graphic design project that showcases the exceptional artwork of the winners from the 2023 Colours competition. With captivating visuals and artist profiles, this project celebrates the talent and creativity of the participants while providing an immersive experience for visitors to explore and appreciate their remarkable achievements</p>
            </div>
          <div class="project-img">
            <img src="./img/pkg3.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>PAPER SETTING</h1>
            <h2>Perfection is Our Prime Key</h2>
            <p>Paper setting is a crucial aspect of the printing and publishing industry, involving the meticulous arrangement and formatting of text, images, and other visual elements for optimal readability and aesthetic appeal. With attention to detail and a keen eye for design, paper setting professionals ensure that content is organized effectively, fonts are chosen appropriately, and overall layouts are visually pleasing, resulting in a seamless reading experience for the audience.</p>
          </div>
          <div class="project-img">
            <img src="./img/type.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Revel Media Partner</h1>
            <h2>Zero Plastic Movement Poster</h2>
            <p>Rotaract Club and Zero Plastic Community of Rajarata University are pleased to announce
              their partnership with Infocus Media as the official media partner for the joint clean up project "Renew the Earth 1.0".
              
              Together we will continue to inspire others to take action and join us against environmental pollution.</p>
          </div>
          <div class="project-img">
            <img src="./img/INF1.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>App Development</h1>
            <h2>Empowering ideas through mobile apps.</h2>
            <p>App development is the process of creating software applications for mobile devices or other electronic devices. It involves designing, coding, testing, and deploying applications that cater to specific user needs, providing a seamless and intuitive user experience while utilizing the capabilities of the target platform.</p>
          </div>
          <div class="project-img">
            <img src="./img/soft.webp" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Media Team</h1>
            <h2>Unleashing the power of media.</h2>
            <p>The media team is a dynamic powerhouse of creativity, consistently pushing boundaries and delivering powerful visual content. With their innovative ideas, exceptional skills, and collaborative approach, they bring projects to life with a level of creativity that captivates and inspires audiences, making them an unstoppable force in the world of media.</p>
          </div>
          <div class="project-img">
            <img src="./img/team.jpg" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/img-2.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Designer/Developer</h2>
        <p>As a graphic designer and developer, I am a versatile creative professional who combines the power of visual aesthetics with technical expertise. With a keen eye for design, I craft compelling visuals that capture attention and communicate effectively. Simultaneously, my development skills enable me to bring those designs to life through interactive and user-friendly experiences. I thrive on the challenge of finding innovative solutions and strive to create captivating designs that not only engage users but also convey powerful narratives. With a passion for merging art and technology, I am dedicated to delivering visually striking and technically seamless projects that leave a lasting impact.</p>
        <a href="https://t.ly/Ww9vA" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="./img/phone.png" width="32px" height="32px"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+94 76 91 401 78</h2>
            <h2>+94 72 91 401 78</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="./img/mail.png" width="32px" height="32px"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>RisfathAhamedOfficial@gmail.com</h2>
            <h2>ict2020093@as.rjt.ac.lk</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="./img/pin.png" width="32" height="32" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>No.375/B,</h2>
            <h2>Bandara Pothana, Pubbogama</h2>
          </div>
        </div>
      </div>

      <body>

        <div class="containr">
          <div class="text">Send Message</div>

            <form id="contact-form" action="index.php" method="post">
              <div class="form-row">
                <div class="input-data">
                  <input type="text" id="cont-fname" name="cont-fname" onkeyup="validateName()">
                  <div class="underline"></div>
                  <label for="">First Name</label>
                  <span id="fname-error"></span>
                </div>
                <div class="input-data">
                  <input type="text" id="cont-lname" name="cont-lname" onkeyup="validateLastName()">
                  <div class="underline"></div>
                  <label for="">Last Name</label>
                  <span id="lname-error"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <input type="email" id="cont-email" name="cont-email" onkeyup="validateEmail()">
                  <div class="underline"></div>
                  <label for="">Email Address</label>
                  <span id="mail-error"></span>
                </div>
                <div class="input-data">
                  <input type="tel" id="cont-mobile" name="cont-mobile" onkeyup="validateMobile()">
                  <div class="underline"></div>
                  <label for="">Mobile Number</label>
                  <span id="phone-error"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data textarea">
                  <textarea rows="8" cols="80" id="cont-message" name="cont-message" onkeyup="validateMessage()"></textarea>
                  <br />
                  <div class="underline"></div>
                  <label for="">Write your message</label>
                  <span id="text-error"></span>
                </div>
              </div>
              <div class="form-row submit-btn">
                <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" value="Submit">
                </div>
              </div>
            </form>
          </div>
        <div class="social-links">
          <a href="https://www.fb.com/RisfathAhamedR"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/R_RisfathAhamed"><i class="fab fa-instagram"></i></a>
          <a href="https://www.twitter.com/R_RisfathAhamed"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/risfathahamedr/"><i class="fab fa-linkedin"></i></a>
          <a href="https://www.wa.me/94769140178"><i class="fab fa-whatsapp"></i></a>
        </div>
      </body>
      
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>R</span>isfath <span>A</span>hamed</h1>
      </div>
      <h2>Your Complete Web Solution</h2>
      <p>Copyright © 2023 Risfath Ahamed. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
  <?php
    // Display SweetAlert popup dynamically based on messages
    if (!empty($successMessage)) {
        echo '<script>
            Swal.fire({
                title: "Message Sent!",
                text: "' . $successMessage . '",
                icon: "success"
            });
        </script>';
    } elseif (!empty($errorMessage)) {
        echo '<script>
            Swal.fire({
                title: "Oops...",
                html: "' . $errorMessage . '<br><a href=\'\'>Why do I have this issue?</a>",
                icon: "error"
            });
        </script>';
    }
    ?>
  
</body>

</html>