<?php
session_start();

include("./php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Change Profile</title>
</head>

<body>

    <!-- header section start  -->
    <section class="header">
    <a href="home.php" class="logo">Tourista.Pk</a>
        <nav class="navbar">
            <a href="home.html" class="items">Home</a>
            <a href="about.html" class="items">About</a>
            <a href="package.html" class="items">Package</a>
            <a href="book.html" class="items">Book </a>
          </nav>
          <div class="right-links">
              <a href="./php/logout.php"> <button class="logout">Log Out</button> </a>
          </div>
    </section>
    <div class="container">
    <div class="box form-box">
                <div class="editImage">
                    <img src="images/edit.jpg" alt="">
                </div>
            <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];


                $id = $_SESSION['id'];

                $edit_query = mysqli_query($conn, "UPDATE userreg SET username='$username', email='$email' WHERE id=$id ") or die("error occurred");

                if ($edit_query) {
                    echo "<div class='message'>
                        <p>Profile Updated!</p>
                    </div> <br>";
                    echo "<a href='home.php'><button class='btn'>Go Home</button>";
                }
            } else {

                $id = $_SESSION['id'];
                $query = mysqli_query($conn, "SELECT*FROM userreg WHERE id=$id ");

                while ($result = mysqli_fetch_assoc($query)) {
                    $res_Uname = $result['username'];
                    $res_Email = $result['email'];
                }

            ?>
                <header>Change Profile</header>
                <form action="" method="post">
                
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                    </div>


                    <div class="field">

                        <input type="submit" class="btn" name="submit" value="Update" required>
                    </div>

                </form>
        </div>
    <?php } ?>
    </div>
</body>

</html>