<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tourista.Pk</title>

  <!-- swiper css link  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="home.css" />

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

    <!-- Profile Section -->
    <div class="container">
        <div class="box form-box">
            <?php
           session_start();
           include("php/config.php");
            ?>
        </div>
    </div>
</section>

  <!-- header section end  -->



 
  <!-- home section start  -->

  <section class="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background: url(images/home1.jpg) no-repeat ">
          <div class="content">
            <span>explore,discover,travel</span>
            <h3>Travel around the world</h3>
            <a href="package.php" class="btn">Discover more</a>
          </div>
        </div>

        <div class="swiper-slide" style="background: url(images/home2.jpg) no-repeat">
          <div class="content">
            <span>explore,discover,travel</span>
            <h3>Discover the new places</h3>
            <a href="package.php" class="btn">Discover more</a>
          </div>
        </div>

        <div class="swiper-slide" style="background: url(images/home3.jpg) no-repeat">
          <div class="content">
            <span>explore,discover,travel</span>
            <h3>Make your true worthwhile</h3>
            <a href="package.php" class="btn">Discover more</a>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

  <!-- home section end  -->

  <!-- Services section start -->

  <section class="services" id="services">
    <h1 class="heading"> Our <span>Services</span></h1>
    <div class="box-container">
      <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Venue Selection</h3>
        <p>Discover the world through our lens, where every destination is a masterpiece.</p>
      </div>

      <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>Hotel Arrangements</h3>
        <p>Crafting unforgettable moments, one stay at a time.</p>
      </div>

      <div class="box">
        <i class="fas fa-music"></i>
        <h3>Entertainment</h3>
        <p>Elevate your journey with our curated music entertainment.</p>
      </div>

      <div class="box">
        <i class="fas fa-utensils"></i>
        <h3>Food and Drinks</h3>
        <p>Savor the world on a plate and toast to unforgettable moments..</p>
      </div>

      <div class="box">
        <i class="fas fa-photo-video"></i>
        <h3>Photography</h3>
        <p> Unleash the photographer in you and embark on a visual journey. 📸✨.</p>
      </div>

      <div class="box">
        <i class="fas fa-birthday-cake"></i>
        <h3>Custom Foods</h3>
        <p>Embrace the extraordinary and celebrate your special moment.</p>
      </div>
    </div>
  </section>
  <!-- Services section end -->

  <!-- home about section start -->
  <section class="home-about">
    <h1 class="heading"> <Span>About </Span>Us</h1>
    <div class="row" >
      <div class="image" style="width: 50%;">
        <img src="images/adventure.jpg" alt="" />
      </div>

      <div class="content" >
        <h3>We will give a very special tour for you guys</h3>
        <p>
        Welcome to Tourista.pk, your gateway to unforgettable journeys and the wonders of Pakistan. At Tourista.pk, we believe that travel is not just about reaching a destination; it's about the experiences and memories created along the way. Our platform is born out of a shared passion for exploration and a commitment to making the beauty of Pakistan accessible to all.
        </p>
        <a href="about.php" class="btn">Read more </a>
      </div>
    </div>
  </section>
  <!-- home about section end -->

  <!-- Our gallery section start -->
  <section class="gallery" id='gallery'>

    <h1 class="heading">Our <span>Gallery</span></h1>
    <div class="box-container">
      <div class="box">
        <img src="images/adventure.jpg" alt="">
        <h3 class="title">Photos and videos</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>



      <div class="box">
        <img src="images/trekking.jpg" alt="">
        <h3 class="title">Photos and videos</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>


      <div class="box">
        <img src="images/tourguide.jpg" alt="">
        <h3 class="title">Photos and videos</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/camping.jpg" alt="">
        <h3 class="title">Photos and videos</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images//campfire.jpg" alt="">
        <h3 class="title">Photos and videos</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/offroad.jpg" alt="">
        <h3 class="title">Photos and videos</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/package.jpg" alt="">
        <h3 class="title">Photos and videos</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/adventure.jpg" alt="">
        <h3 class="title">Photos and videos</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/adventure.jpg" alt="">
        <h3 class="title">Photos and videos</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>
    </div>


  </section>

  <!-- Our gallery section end -->



  <!-- home packages section start  -->

  <section class="home-packages">
    <h1 class="heading">
    <span>Our </span>Packages</h1>
    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="images/grouptourists.jpg" alt="" />
        </div>

        <div class="content">
          <h3>Shipping</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis
            quae maiores praesentium possimus fuga nihil debitis, cumque
            fugiat temporibus tempora.
          </p>
          <a href="book.php" class="btn">Book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/hiking.jpg" alt="" />
        </div>

        <div class="content">
          <h3>hiking </h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis
            quae maiores praesentium possimus fuga nihil debitis, cumque
            fugiat temporibus tempora.
          </p>
          <a href="book.php" class="btn">Book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/campfire.jpg" alt="" />
        </div>

        <div class="content">
          <h3>Camping</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis
            quae maiores praesentium possimus fuga nihil debitis, cumque
            fugiat temporibus tempora.
          </p>
          <a href="book.php" class="btn">Book now</a>
        </div>
      </div>


    </div>
  </section>

  <!-- home packages section end  -->
  <!-- home offers section start  -->
  <section class="home-offer">
    <div class="content">
      <h3>upto 50% off</h3>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore,
        odit? Deleniti, laudantium?
      </p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </section>
  <!-- home offers section end  -->

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

  <!-- swiper js link  -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  

  <!-- Add this script to show a popup -->

  <script src="https://unpkg.com/scrollreveal"></script>
   <!-- custom js file link  -->
   <script>


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

var swiper = new Swiper(".home-slider", {
  loop: true,
  grabCursor:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const sr = ScrollReveal({
    distance: '100px',
    duration: 2800,
    reset: true
})

sr.reveal('.home ,services , .home-about', { delay: 300, origin: 'left' });
sr.reveal('.home-packages, .gallery, .home-offer', { delay: 300, origin: 'right' });
sr.reveal('.footer', { delay: 300, origin: 'bottom' })

   </script>

</body>

</html>