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
        <section class="sub-sub-header-cars">
            <nav>
                <a href="index.html"><img src="design/images/Logo.png" alt=""></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hidemenu()"></i>
                    <ul>
                        <li><?php echo "Hi ",$firstName; ?></li>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="car.php">CARS</a></li>
                        <li><a href="blog.php">FEEDBACK</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                        <li><a href="GDRLogin.html">SIGNOUT</a></li>
                        
                    </ul>
                    <i class="fa fa-bars" onclick="showmenu()"></i>
                </nav>
    
                <h1>Available Cars</h1>
            </section>
        <!-- END nav -->

        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div
                                class="img rounded d-flex align-items-end"
                                style="
                                    background-image: url(design/images/car-1.jpg);
                                "
                            ></div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="car-single.html"
                                        >Mercedes Grand Sedan</a
                                    >
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Cheverolet</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="#"
                                        class="btn btn-primary py-2 mr-1 bookBtn"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.html"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div
                                class="img rounded d-flex align-items-end"
                                style="
                                    background-image: url(design/images/car-2.jpg);
                                "
                            ></div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="car-single.html">Range Rover</a>
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Subaru</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="#"
                                        class="btn btn-primary py-2 mr-1 bookBtn"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.html"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div
                                class="img rounded d-flex align-items-end"
                                style="
                                    background-image: url(design/images/car-3.jpg);
                                "
                            ></div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="car-single.html"
                                        >Mercedes Grand Sedan</a
                                    >
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Cheverolet</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="#"
                                        class="btn btn-primary py-2 mr-1 bookBtn"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.html"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div
                                class="img rounded d-flex align-items-end"
                                style="
                                    background-image: url(design/images/car-4.jpg);
                                "
                            ></div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="car-single.html"
                                        >Mercedes Grand Sedan</a
                                    >
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Cheverolet</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="#"
                                        class="btn btn-primary py-2 mr-1 bookBtn"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.html"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div
                                class="img rounded d-flex align-items-end"
                                style="
                                    background-image: url(design/images/car-5.jpg);
                                "
                            ></div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="car-single.html">Range Rover</a>
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Subaru</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="#"
                                        class="btn btn-primary py-2 mr-1 bookBtn"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.html"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div
                                class="img rounded d-flex align-items-end"
                                style="
                                    background-image: url(design/images/car-6.jpg);
                                "
                            ></div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="car-single.html"
                                        >Mercedes Grand Sedan</a
                                    >
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Cheverolet</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="#"
                                        class="btn btn-primary py-2 mr-1 bookBtn"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.html"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div
                                class="img rounded d-flex align-items-end"
                                style="
                                    background-image: url(design/images/car-7.jpg);
                                "
                            ></div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="car-single.html"
                                        >Mercedes Grand Sedan</a
                                    >
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Cheverolet</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="#"
                                        class="btn btn-primary py-2 mr-1 bookBtn"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.html"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div
                                class="img rounded d-flex align-items-end"
                                style="
                                    background-image: url(design/images/car-8.jpg);
                                "
                            ></div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="car-single.html">Range Rover</a>
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Subaru</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="#"
                                        class="btn btn-primary py-2 mr-1 bookBtn"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.html"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div
                                class="img rounded d-flex align-items-end"
                                style="
                                    background-image: url(design/images/car-9.jpg);
                                "
                            ></div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="car-single.html"
                                        >Mercedes Grand Sedan</a
                                    >
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Cheverolet</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="#"
                                        class="btn btn-primary py-2 mr-1 bookBtn"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.html"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div
                                class="img rounded d-flex align-items-end"
                                style="
                                    background-image: url(design/images/car-10.jpg);
                                "
                            ></div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="car-single.html"
                                        >Mercedes Grand Sedan</a
                                    >
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Cheverolet</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="#"
                                        class="btn btn-primary py-2 mr-1 bookBtn"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.html"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div
                                class="img rounded d-flex align-items-end"
                                style="
                                    background-image: url(design/images/car-11.jpg);
                                "
                            ></div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="car-single.html">Range Rover</a>
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Subaru</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="#"
                                        class="btn btn-primary py-2 mr-1 bookBtn"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.html"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div
                                class="img rounded d-flex align-items-end"
                                style="
                                    background-image: url(design/images/car-12.jpg);
                                "
                            ></div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="car-single.html"
                                        >Mercedes Grand Sedan</a
                                    >
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Cheverolet</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="#"
                                        class="btn btn-primary py-2 mr-1 bookBtn"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.html"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">
                                <a href="#" class="logo"
                                    >Car<span>book</span></a
                                >
                            </h2>
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
                            <h2 class="ftco-heading-2">Information</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="py-2 d-block">About</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >Services</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >Term and Conditions</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >Best Price Guarantee</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >Privacy &amp; Cookies Policy</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Customer Support</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="py-2 d-block">FAQ</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >Payment Option</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >Booking Tips</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >How it works</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"
                                        >Contact Us</a
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
<!--modal-->
<form action="transaction.php" method="post">
    <div class="modal" id="locationModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h2 class="modal-title text-white">One more step...</h2>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-primary">
                    <div class="">
                        <form
                            action="#"
                            class="request-form ftco-animate bg-primary"
                        >
                            <div class="form-group mr-2">
                                <label for="" class="label">Email</label>
                                <h5><?php echo $email; ?></h5>
                                <input type="hidden" name="Email" value="<?php echo $email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Pick-up location</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="City, Airport, Station, etc"
                                    name="UpLoc"
                                />
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Drop-off location</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="City, Airport, Station, etc"
                                    name="DoLoc"
                                />
                            </div>
                            <div class="d-flex">
                                <div class="form-group mr-2">
                                    <label for="" class="label">Pick-up date</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="book_pick_date"
                                        placeholder="Date"
                                        name="PDate"
                                    />
                                </div>
                                <div class="form-group ml-2">
                                    <label for="" class="label">Drop-off date</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="book_off_date"
                                        placeholder="Date"
                                        name="DoDate"
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Pick-up time</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="time_pick"
                                    placeholder="Time"
                                    name="PTime"
                                />
                            </div>
                            <div class="my-2">
                                <select
                                    class="form-control"
                                    placeholder="Card"
                                    type="text"
                                    name="PCard"
                                >
                                    <option selected>Payment Card</option>
                                    <option class="text-dark" value="1">Visa</option>
                                    <option class="text-dark" value="2">MasterCard</option>
                                    <option class="text-dark" value="3">American Express</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Payment Option</label>
                                <div class="my-2">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="payment_pick"
                                        placeholder="Card Number"
                                        name="Cnum"
                                    />
                                </div>
                                <div class="my-2">
                                    <div class="d-flex">
                                        <div class="form-group mr-2">
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="MM/YYYY"
                                                name="MY"
                                            />
                                        </div>
                                        <div class="form-group ml-2">
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="CCV"
                                                name="CCV"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input
                                    type="submit"
                                    value="Rent A Car Now"
                                    class="btn btn-secondary py-3 px-4"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var bookButtons = document.getElementsByClassName("bookBtn");
                for (var i = 0; i < bookButtons.length; i++) {
                    bookButtons[i].addEventListener("click", function (event) {
                        event.preventDefault();

                        var locationModal = new bootstrap.Modal(
                            document.getElementById("locationModal")
                        );
                        locationModal.show();
                    });
                }

                var closeButtons = document.getElementsByClassName("close");
                for (var j = 0; j < closeButtons.length; j++) {
                    closeButtons[j].addEventListener("click", function () {
                        var modals = document.getElementsByClassName("modal");
                        for (var k = 0; k < modals.length; k++) {
                            var modal = bootstrap.Modal.getInstance(modals[k]);
                            if (modal) {
                                modal.hide();
                            }
                        }
                    });
                }
            });
        </script>
        <script src="design/cardesign/js/jquery.min.js"></script>
        <script src="design/cardesign/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="design/cardesign/js/popper.min.js"></script>
        <script src="design/cardesign/js/bootstrap.min.js"></script>
        <script src="design/cardesign/js/jquery.easing.1.3.js"></script>
        <script src="design/cardesign/js/jquery.waypoints.min.js"></script>
        <script src="design/cardesign/js/jquery.stellar.min.js"></script>
        <script src="design/cardesign/js/owl.carousel.min.js"></script>
        <script src="design/cardesign/js/jquery.magnific-popup.min.js"></script>
        <script src="design/cardesign/js/aos.js"></script>
        <script src="design/cardesign/js/jquery.animateNumber.min.js"></script>
        <script src="design/cardesign/js/bootstrap-datepicker.js"></script>
        <script src="design/cardesign/js/jquery.timepicker.min.js"></script>
        <script src="design/cardesign/js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="design/cardesign/js/google-map.js"></script>
        <script src="design/cardesign/js/main.js"></script>
    </body>
</html>
