<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>

    <script defer src="js/script.js"></script>
    <!-- swiper css link  -->
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="about.css" />


  </head>
  <body>
   <!-- header section start  -->
   <section class="header" >
    <a href="home.php" class="logo">Tourista.Pk</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>


    <div class="right-links">
        <a href="./edit.php" class="profile_change">Change Profile</a>
        <a href="./php/logout.php"><button class="logout">Log Out</button></a>
    </div>
    <div id="menu-btn" class="fas fa-bars"></div>

        </div>
    </div>
</section>
  <!-- header section end  -->  
    <!-- header section end  -->
    <div class="heading_about" style="background: url(images/about.jpg) no-repeat">
      <div class="heading-title">
        <h1>About Us</h1>
      </div>
    </div>

    <!-- about section start  -->

    <section class="about">
      <div class="image"><img src="images/about_bg.jpg" alt="" /></div>

      <div class="content">
        <h3>Why choose us?</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, atque?
          Accusamus pariatur cumque ratione temporibus reiciendis, aperiam
          deleniti tempora incidunt.
        </p>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. A
          consequuntur iusto architecto nulla facilis officia, natus quos optio
          est esse ipsam cumque ut qui ipsa maiores quo corrupti vero eos?
        </p>
        <div class="icons-container">
          <div class="icons">
            <i class="fas fa-map"></i>
            <span>Top Desitinations</span>
          </div>

          <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Affordable prices</span>
          </div>
          <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
          </div>
        </div>
      </div>
    </section>

    <!-- about section end  -->
    <!-- review section start -->
   

    <section class="swiper review">
      <h1 class="heading-title" >Client Reviews</h1>

      <div class="swiper-wrapper">
  
        <div class="card swiper-slide">
          <div class="card-image">
            <img src="images/ajab.png" alt="card image">
          </div>
  
          <div class="card-content">
            <span class="card-title">Data Engineer</span>
            <span class="card-name">Ajab Nauman</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            
          </div>
          </div>
        </div>
  
        <div class="card swiper-slide">
          <div class="card-image">
            <img src="images/uzair.png" alt="card image">
          </div>
  
          <div class="card-content">
            <span class="card-title">Frontend Developer</span>
            <span class="card-name">Muhammad Uzair Nisar</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            
          </div>
          </div>
        </div>
  
        <div class="card swiper-slide">
          <div class="card-image">
            <img src="images/umer.jpeg" alt="card image">
          </div>
  
          <div class="card-content">
            <span class="card-title">Data Engineer</span>
            <span class="card-name">Umer Hassan Khan</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            
            
          </div>
          </div>
        </div>
  
        <div class="card swiper-slide">
          <div class="card-image">
            <img src="images/daniyal.jpg" alt="card image">
          </div>
  
          <div class="card-content">
            <span class="card-title">Mobile App Developer</span>
            <span class="card-name">Muhammad Daniyal Khan</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            
          </div>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card-image">
            <img src="images/m_umar.jpg" alt="card image">
          </div>
  
          <div class="card-content">
            <span class="card-title">Flutter Developer</span>
            <span class="card-name">Muhammad Umar</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
           
            
          </div>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card-image">
            <img src="images/hanan.jpg" alt="card image">
          </div>
  
          <div class="card-content">
            <span class="card-title">React Developer</span>
            <span class="card-name">Hanan Iqbal</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            
          </div>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card-image">
            <img src="images/obaid.jpg" alt="card image">
          </div>
  
          <div class="card-content">
            <span class="card-title">UI Designer</span>
            <span class="card-name">Obaidullah</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            
          </div>
          </div>
        </div>
  
      </div>
    </section>

    <!-- review section end -->

    <!-- Footer section start -->
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>Quick Links</h3>
          <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
          <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
          <a href="package.php"> <i class="fas fa-angle-right"></i>Package</a>
          <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
          <h3>Extra Links</h3>

          <a href="#"> <i class="fas fa-angle-right"></i>Ask Questions</a>
          <a href="about.php"> <i class="fas fa-angle-right"></i>About Us</a>
          <a href="#"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
          <a href="#"> <i class="fas fa-angle-right"></i>Terms of use</a>
        </div>

        <div class="box">
          <h3>Contact Information</h3>

          <a href="#"> <i class="fas fa-phone"></i>+923146545790</a>
          <a href="#"> <i class="fas fa-phone"></i>+923146545790</a>
          <a href="#"> <i class="fas fa-envelope"></i>tourista.pk@gmail.com</a>
          <a href="#"> <i class="fas fa-map"></i>Islamabad, Pakistan - 47000</a>
        </div>

        <div class="box">
          <h3>Follow Us</h3>

          <a href="#"> <i class="fab fa-facebook-f"></i>Facebook</a>
          <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
          <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
          <a href="#"> <i class="fab fa-linkedin"></i>LinkedIn</a>
        </div>
      </div>

      <div class="copyright">
        Created By <a href="home.php"> Tourista.pk </a>
        | &copy; 2023 All rights reserved.
      </div>
    </section>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


<!-- Initialize Swiper -->
  <script >

let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};

window.onscroll = () => {
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
};
  var swiper = new Swiper(".review", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 300,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

</script>
  </body>
</html>
