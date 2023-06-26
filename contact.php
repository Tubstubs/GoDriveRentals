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
        <title>GODRIVERENTALS</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <link
            href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i"
            rel="stylesheet"
        />

        <link
            rel="stylesheet"
            href="design/feedbackdesign/css/open-iconic-bootstrap.min.css"
        />
        <link rel="stylesheet" href="design/feedbackdesign/css/animate.css" />

        <link
            rel="stylesheet"
            href="design/feedbackdesign/css/owl.carousel.min.css"
        />
        <link
            rel="stylesheet"
            href="design/feedbackdesign/css/owl.theme.default.min.css"
        />
        <link
            rel="stylesheet"
            href="design/feedbackdesign/css/magnific-popup.css"
        />

        <link rel="stylesheet" href="design/feedbackdesign/css/aos.css" />

        <link
            rel="stylesheet"
            href="design/feedbackdesign/css/ionicons.min.css"
        />

        <link
            rel="stylesheet"
            href="design/feedbackdesign/css/bootstrap-datepicker.css"
        />
        <link
            rel="stylesheet"
            href="design/feedbackdesign/css/jquery.timepicker.css"
        />

        <link rel="stylesheet" href="design/feedbackdesign/css/flaticon.css" />
        <link rel="stylesheet" href="design/feedbackdesign/css/icomoon.css" />
        <link rel="stylesheet" href="design/cardesign/css/style.css" />
        <link rel="stylesheet" href="design/indexstyle.css" />
    </head>
    <body>
    <section class="sub-sub-header-contact">
            <nav>
                <a href="index.php"
                    ><img src="design/images/Logo.png" alt=""
                /></a>
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
                </div>
                
                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>

            <h1>Contact Us</h1>
        </section>
        <!-- END nav -->

        

        <section class="ftco-section contact-section bg-light">
            <div class="container">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-12 mb-4">
                        <h2 class="h3">Contact Information</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p>
                                <span>Address:</span> 1234 Sesame Street Hogwarts Alabang
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p>
                                <span>Phone:</span>
                                <a href="tel://1234567920">+ 63 9618131198</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p>
                                <span>Email:</span>
                                <a href="mailto:info@yoursite.com"
                                    >godriverental@yahoo.com</a
                                >
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p>
                                <span>Facebook</span>
                                <a href="#">rentaldrivers.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row block-9">
                    <div class="col-md-6 order-md-last d-flex">
                        <form action="#" class="bg-white p-5 contact-form">
                            
                            
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Subject"
                                />
                            </div>
                            <div class="form-group">
                                <textarea
                                    name=""
                                    id=""
                                    cols="30"
                                    rows="7"
                                    class="form-control"
                                    placeholder="Message"
                                ></textarea>
                            </div>
                            <div class="form-group">
                                <input
                                    type="submit"
                                    value="Send Message"
                                    class="btn btn-primary py-3 px-5"
                                />
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 d-flex">
                        <div id="map" class="bg-white"></div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">El Siesta Vacaciones</h2>
                            <p>
                                Far far away, behind the word mountains, far
                                from the countries Vokalia and Consonantia,
                                there live the blind texts.
                            </p>
                            <ul
                                class="ftco-footer-social list-unstyled float-md-left float-lft mt-5"
                            >
                                <li class="ftco-animate">
                                    <a href="#"
                                        ><span class="icon-twitter"></span
                                    ></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#"
                                        ><span class="icon-facebook"></span
                                    ></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#"
                                        ><span class="icon-instagram"></span
                                    ></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2">Useful Links</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="py-2 d-block">Blog</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block">Rooms</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >Amenities</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >Gift Card</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Privacy</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="py-2 d-block">Career</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >About Us</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >Contact Us</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >Services</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Have a Questions?</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li>
                                        <span
                                            class="icon icon-map-marker"
                                        ></span
                                        ><span class="text"
                                            >203 Fake St. Mountain View, San
                                            Francisco, California, USA</span
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><span
                                                class="icon icon-phone"
                                            ></span
                                            ><span class="text"
                                                >+2 392 3929 210</span
                                            ></a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><span
                                                class="icon icon-envelope"
                                            ></span
                                            ><span class="text"
                                                >info@yourdomain.com</span
                                            ></a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </footer>

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle
                    class="path-bg"
                    cx="24"
                    cy="24"
                    r="22"
                    fill="none"
                    stroke-width="4"
                    stroke="#eeeeee"
                />
                <circle
                    class="path"
                    cx="24"
                    cy="24"
                    r="22"
                    fill="none"
                    stroke-width="4"
                    stroke-miterlimit="10"
                    stroke="#F96D00"
                />
            </svg>
        </div>

        <script src="design/feedbackdesign/js/jquery.min.js"></script>
        <script src="design/feedbackdesign/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="design/feedbackdesign/js/popper.min.js"></script>
        <script src="design/feedbackdesign/js/bootstrap.min.js"></script>
        <script src="design/feedbackdesign/js/jquery.easing.1.3.js"></script>
        <script src="design/feedbackdesign/js/jquery.waypoints.min.js"></script>
        <script src="design/feedbackdesign/js/jquery.stellar.min.js"></script>
        <script src="design/feedbackdesign/js/owl.carousel.min.js"></script>
        <script src="design/feedbackdesign/js/jquery.magnific-popup.min.js"></script>
        <script src="design/feedbackdesign/js/aos.js"></script>
        <script src="design/feedbackdesign/js/jquery.animateNumber.min.js"></script>
        <script src="design/feedbackdesign/js/bootstrap-datepicker.js"></script>
        <script src="design/feedbackdesign/js/jquery.timepicker.min.js"></script>
        <script src="design/feedbackdesign/js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="design/feedbackdesign/js/google-map.js"></script>
        <script src="design/feedbackdesign/js/main.js"></script>
    </body>
</html>
