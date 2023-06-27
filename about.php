<?php
session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    include 'config.php';

    // Prepare the SQL query
    $query = "SELECT firstName FROM registration WHERE email = ?";

    // Prepare the statement
    $stmt = $conn->prepare($query);

    if ($stmt) {
        // Bind the parameter
        $stmt->bind_param('s', $email);

        // Execute the statement
        $stmt->execute();

        // Get the result
        $stmt->bind_result($firstName);

        // Fetch the result
        $stmt->fetch();

        // Close the statement
        $stmt->close();
    } else {
        // Handle any errors during statement preparation
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: GDRLogin.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>GODRIVERENTALS</title>
        <link rel="stylesheet" href="design/indexstyle.css" />
        <link rel="stylesheet" href="design/carousel.css" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
            rel="stylesheet"
        />
    </head>
    
    <!-- ----header--- -->

<body>
    <section class="sub-header">
        <nav>
            <a href="index.php"><img src="design/images/Logo.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><?php echo "Hi ",$firstName; ?></li>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="car.php">CARS</a></li>
                    <li><a href="blog.php">FEEDBACK</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="GDRLogin.html">SIGNOUT</a></li>
                    
                </ul>
                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>

            <h1>About Us</h1>
        </section>
        <!-- -----about us content---- -->

        <section class="about-us">
            <div class="row">
                <div class="about-col">
                    <h1>WE ARE THE WORLD'S BEST CAR RENTAL SERVICES</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quo quae tenetur unde voluptates corporis accusantium
                        minus id numquam illum sit nisi similique quis Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Quo
                        quae tenetur unde voluptates corporis accusantium minus
                        id numquam illum sit nisi similique quis maxime
                    </p>

                    <a class="hero-btn red-btn" href="">Rent now</a>
                </div>

                <div class="about-col">
                    <img src="design/images/car-9.jpg" alt="" />
                </div>

            </div>
        </section>

        <!-- --footer-- -->
        <section class="footer">
            <h4>About Us</h4>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae
                fugiat ipsum odit. Sunt aut nostrum deserunt minus cumque
                praesentium ut debitis illum <br />
                Molestiae libero excepturi in voluptatem tempora ipsam?
            </p>
            <div class="icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
            </div>
        </section>

        <!-- ---javascript---- -->
        <script>
            var navLinks = document.getElementById("navLinks");

            function showmenu() {
                navLinks.style.right = "0";
            }
            function hidemenu() {
                navLinks.style.right = "-200px";
            }
        </script>
    </body>
</html>
