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
        <section class="header">
            <nav>
                <a href="index.html"
                    ><img src="design/images/Logo.png" alt=""
                /></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hidemenu()"></i>
                    <ul>
                    <li><?php echo "Hi ",$firstName; ?></li>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="car.php">CARS</a></li>
                            <li><a href="blog.html">FEEDBACK</a></li>
                            <li><a href="contact.html">CONTACT</a></li>
                            <li><a href="GDRLogin.html">SIGNOUT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>

            <div class="text-box">
                <h1>AFFORDABLE & EASY WAY TO RENT A CAR</h1>
                <p>
                    A small river named Duden flows by their place and supplies
                    it with the necessary regelialia. <br />It is a
                    paradisematic country, in which roasted parts
                </p>
                <a href="about.html" class="hero-btn">Visit Us To know More</a>
            </div>
        </section>

        <!-- -----cars----- -->

        <section class="cars">
            <h5>WE OFFER</h5>
            <h1>FEATURED VEHICLES</h1>
            <div class="row">
                <div class="container">
                    <div class="card">
                        <h3 class="title">Card 1</h3>
                        <div class="bar">
                            <div class="emptybar"></div>
                            <div class="filledbar"></div>
                            <div>
                                <img
                                    src="design/images/car-1.jpg"
                                    alt="Carousel Image"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="title">Card 2</h3>
                        <div class="bar">
                            <div class="emptybar"></div>
                            <div class="filledbar"></div>
                            <div>
                                <img
                                    src="design/images/car-2.jpg"
                                    alt="Carousel Image"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="title">Card 3</h3>
                        <div class="bar">
                            <div class="emptybar"></div>
                            <div class="filledbar"></div>
                            <div>
                                <img
                                    src="design/images/car-3.jpg"
                                    alt="Carousel Image"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="title">Card 4</h3>
                        <div class="bar">
                            <div class="emptybar"></div>
                            <div class="filledbar"></div>
                            <div>
                                <img
                                    src="design/images/car-4.jpg"
                                    alt="Carousel Image"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="title">Card 5</h3>
                        <div class="bar">
                            <div class="emptybar"></div>
                            <div class="filledbar"></div>
                            <div>
                                <img
                                    src="design/images/car-5.jpg"
                                    alt="Carousel Image"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="title">Card 6</h3>
                        <div class="bar">
                            <div class="emptybar"></div>
                            <div class="filledbar"></div>
                            <div>
                                <img
                                    src="design/images/car-6.jpg"
                                    alt="Carousel Image"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="title">Card 7</h3>
                        <div class="bar">
                            <div class="emptybar"></div>
                            <div class="filledbar"></div>
                            <div>
                                <img
                                    src="design/images/car-7.jpg"
                                    alt="Carousel Image"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="title">Card 8</h3>
                        <div class="bar">
                            <div class="emptybar"></div>
                            <div class="filledbar"></div>
                            <div>
                                <img
                                    src="design/images/car-8.jpg"
                                    alt="Carousel Image"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="title">Card 9</h3>
                        <div class="bar">
                            <div class="emptybar"></div>
                            <div class="filledbar"></div>
                            <div>
                                <img
                                    src="design/images/car-9.jpg"
                                    alt="Carousel Image"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------call to action--- -->

        <section class="cta1">
            <h1>About us<br /></h1>
            <p class="paragraph">
                Welcome to GoDriveRentals, your ultimate destination for
                hassle-free car rentals. At GoDriveRentals, we understand that
                convenience, reliability, and affordability are key when it
                comes to renting a car. With a wide range of vehicles to choose
                from, including sedans, SUVs, luxury cars, and more, we strive
                to provide you with the perfect ride to suit your needs. Our
                user-friendly website allows you to effortlessly browse,
                compare, and book your ideal rental car, making the entire
                process quick and easy. We pride ourselves on exceptional
                customer service, ensuring that your experience with us is
                smooth from start to finish. Whether you're planning a road
                trip, a business venture, or simply need a temporary vehicle,
                GoDriveRentals is here to make your journey memorable and
                stress-free. Trust us to be your reliable partner in
                transportation, and let us take you wherever you need to go.
            </p>
        </section>
        <!-- ----campus---- -->

        <section class="campus">
            <h1>BRANCHES</h1>

            <div class="row">
                <div class="campus-col">
                    <img src="design/images/Manila.jpg" />
                    <div class="layer">
                        <h3>PHILIPPINES</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="design/images/NY.jpg" />
                    <div class="layer">
                        <h3>NEW YORK</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="design/images/Japan.jpg" />
                    <div class="layer">
                        <h3>JAPAN</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------SERVICES----- -->
        <section class="SERVICES">
            <h5>SERVICES</h5>
            <h1>OUR LATEST SERVICES</h1>
            <div class="row">
                <div class="SERVICES-col">
                    <h3>&ensp;&ensp;&ensp;Wedding Ceremony</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elitLorem, ipsum dolor sit
                    </p>
                </div>
                <div class="SERVICES-col">
                    <h3>&ensp; &ensp; &ensp; &ensp; &ensp; City Transfer</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elitLorem, ipsum dolor sit
                    </p>
                </div>
                <div class="SERVICES-col">
                    <h3>&ensp; &ensp; &ensp; &ensp; &ensp;Airport Transfer</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elitLorem, ipsum dolor sit
                    </p>
                </div>
                <div class="SERVICES-col">
                    <h3>&ensp;&ensp;&ensp; &ensp; &ensp;Whole City Tour</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elitLorem, ipsum dolor sit
                    </p>
                </div>
            </div>
        </section>

        <!-- ------testimonials---- -->
        <section class="testimonials">
            <h5>FEEDBACK</h5>
            <h1>CLIENTS</h1>

            <div class="row">
                <div class="testimonial-col">
                    <img src="eduford/user1.jpg" alt="" />
                    <div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Quae fugiat ipsum odit. Sunt aut nostrum
                            deserunt minus cumque praesentium ut debitis illum
                            cum? Molestiae libero excepturi in voluptatem
                            tempora ipsam?
                        </p>
                        <h3>Elizabeth pitch</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="testimonial-col">
                    <img src="eduford/user2.jpg" alt="" />
                    <div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Quae fugiat ipsum odit. Sunt aut nostrum
                            deserunt minus cumque praesentium ut debitis illum
                            cum? Molestiae libero excepturi in voluptatem
                            tempora ipsam?
                        </p>
                        <h3>Davic berkley</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------call to action--- -->

        <section class="cta">
            <h1>
                WHAT ARE YOU WAITING FOR<br />
                RENT NOW
            </h1>
            <a class="hero-btn" href="car.html">CLICK ME</a>
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
