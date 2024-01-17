<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Now</title>

    <!-- swiper css link  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="book.css" />
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
  <div class="heading_book" style="background:url(images/booking.jpg) no-repeat">
    <div class="heading-title">

      <h1>Booking your adventure</h1>
    </div>
  </div>


  <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reg";

    // Create a connection to MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $location = $_POST["location"];
    $guests = $_POST["guests"];
    $arrivals = $_POST["arrivals"];
    $leaving = $_POST["leaving"];

    // Insert data into the database
    $sql = "INSERT INTO book_details(name, email, phone, address, location, guests, arrivals, leaving)
            VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

   
if ($conn->query($sql) === TRUE) {
  $response = "Booking successful!";
} else {
  $response = "Error: " . $sql . "<br>" . $conn->error;
}

    // Close the database connection
    $conn->close();
}
?>


    <!-- booking section start -->
    <section class="booking">
      <h1 class="heading">Book <span style="color: rgb(73, 203, 64);"> your </span> trip!</h1>

      <form action="book.php" method="post" class="book_form">
        <div class="flex">
          <div class="inputBox">
            <span>name:</span>
            <input
              type="text"
              placeholder="Enter your name"
              name="name"
              required
            />
          </div>

          <div class="inputBox">
            <span>email:</span>
            <input
              type="email"
              placeholder="Enter your email"
              name="email"
              required
            />
          </div>
          <div class="inputBox">
            <span>phone:</span>
            <input
              type="number"
              placeholder="Enter your phone number"
              name="phone"
              required
            />
          </div>

          <div class="inputBox">
            <span>address:</span>
            <input
              type="text"
              placeholder="Enter your address"
              name="address"
              required
            />
          </div>
          <div class="inputBox">
            <span>where to:</span>
            <input
              type="text"
              placeholder="Place where you want to visit:"
              name="location"
              required
            />
          </div>

          <div class="inputBox">
            <span>how many:</span>
            <input
              type="number"
              placeholder="number of guests:"
              name="guests"
              required
            />
          </div>
          <div class="inputBox">
            <span>arrivals:</span>
            <input type="date" name="arrivals" />
          </div>
          <div class="inputBox">
            <span>leaving:</span>
            <input type="date" name="leaving" />
          </div>
        </div>

          <input type="submit" name="send" class="btn" value="submit" />
      </form>
    </section>

    <!-- booking section end-->

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
    <!-- custom js file link  -->
     <!-- custom js file link  -->
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
 // Display popup with PHP response
 window.onload = function() {
            var response = "<?php echo $response; ?>";
            if (response !== "") {
                alert(response);
            }
        };
</script>
  </body>
</html>
