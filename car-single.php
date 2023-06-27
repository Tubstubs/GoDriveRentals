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

        <link rel="stylesheet" href="design/cardesign/css/flaticon.css" />
        <link rel="stylesheet" href="design/cardesign/css/icomoon.css" />
        <link rel="stylesheet" href="design/cardesign/css/style.css" />
        <link rel="stylesheet" href="design/indexstyle.css" />
    </head>
    <body>
    <section class="sub-sub-header-cars">
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
    
                <h1>Available Cars</h1>
            </section>
        <!-- END nav -->

        

        <section class="ftco-section ftco-car-details">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="car-details">
                            <div
                                class="img rounded"
                                style="
                                    background-image: url(design/images/bg_1.jpg);
                                "
                            ></div>
                            <div class="text text-center">
                                <span class="subheading">Cheverolet</span>
                                <h2>Mercedes Grand Sedan</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services">
                            <div class="media-body py-md-4">
                                <div class="d-flex mb-3 align-items-center">
                                    <div
                                        class="icon d-flex align-items-center justify-content-center"
                                    >
                                        <span class="flaticon-dashboard"></span>
                                    </div>
                                    <div class="text">
                                        <h3 class="heading mb-0 pl-3">
                                            Mileage
                                            <span>40,000</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services">
                            <div class="media-body py-md-4">
                                <div class="d-flex mb-3 align-items-center">
                                    <div
                                        class="icon d-flex align-items-center justify-content-center"
                                    >
                                        <span class="flaticon-pistons"></span>
                                    </div>
                                    <div class="text">
                                        <h3 class="heading mb-0 pl-3">
                                            Transmission
                                            <span>Manual</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services">
                            <div class="media-body py-md-4">
                                <div class="d-flex mb-3 align-items-center">
                                    <div
                                        class="icon d-flex align-items-center justify-content-center"
                                    >
                                        <span class="flaticon-car-seat"></span>
                                    </div>
                                    <div class="text">
                                        <h3 class="heading mb-0 pl-3">
                                            Seats
                                            <span>5 Adults</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services">
                            <div class="media-body py-md-4">
                                <div class="d-flex mb-3 align-items-center">
                                    <div
                                        class="icon d-flex align-items-center justify-content-center"
                                    >
                                        <span class="flaticon-backpack"></span>
                                    </div>
                                    <div class="text">
                                        <h3 class="heading mb-0 pl-3">
                                            Luggage
                                            <span>4 Bags</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services">
                            <div class="media-body py-md-4">
                                <div class="d-flex mb-3 align-items-center">
                                    <div
                                        class="icon d-flex align-items-center justify-content-center"
                                    >
                                        <span class="flaticon-diesel"></span>
                                    </div>
                                    <div class="text">
                                        <h3 class="heading mb-0 pl-3">
                                            Fuel
                                            <span>Petrol</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 pills">
                        <div class="bd-example bd-example-tabs">
                            <div class="d-flex justify-content-center">
                                <ul
                                    class="nav nav-pills mb-3"
                                    id="pills-tab"
                                    role="tablist"
                                >
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            id="pills-description-tab"
                                            data-toggle="pill"
                                            href="#pills-description"
                                            role="tab"
                                            aria-controls="pills-description"
                                            aria-expanded="true"
                                            >Features</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="pills-manufacturer-tab"
                                            data-toggle="pill"
                                            href="#pills-manufacturer"
                                            role="tab"
                                            aria-controls="pills-manufacturer"
                                            aria-expanded="true"
                                            >Description</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="pills-review-tab"
                                            data-toggle="pill"
                                            href="#pills-review"
                                            role="tab"
                                            aria-controls="pills-review"
                                            aria-expanded="true"
                                            >Review</a
                                        >
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content" id="pills-tabContent">
                                <div
                                    class="tab-pane fade show active"
                                    id="pills-description"
                                    role="tabpanel"
                                    aria-labelledby="pills-description-tab"
                                >
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="features">
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >Airconditions
                                                </li>
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >Child Seat
                                                </li>
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >GPS
                                                </li>
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >Luggage
                                                </li>
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >Music
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="features">
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >Seat Belt
                                                </li>
                                                <li class="remove">
                                                    <span
                                                        class="ion-ios-close"
                                                    ></span
                                                    >Sleeping Bed
                                                </li>
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >Water
                                                </li>
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >Bluetooth
                                                </li>
                                                <li class="remove">
                                                    <span
                                                        class="ion-ios-close"
                                                    ></span
                                                    >Onboard computer
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="features">
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >Audio input
                                                </li>
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >Long Term Trips
                                                </li>
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >Car Kit
                                                </li>
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >Remote central locking
                                                </li>
                                                <li class="check">
                                                    <span
                                                        class="ion-ios-checkmark"
                                                    ></span
                                                    >Climate control
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="tab-pane fade"
                                    id="pills-manufacturer"
                                    role="tabpanel"
                                    aria-labelledby="pills-manufacturer-tab"
                                >
                                    <p>
                                        Even the all-powerful Pointing has no
                                        control about the blind texts it is an
                                        almost unorthographic life One day
                                        however a small line of blind text by
                                        the name of Lorem Ipsum decided to leave
                                        for the far World of Grammar.
                                    </p>
                                    <p>
                                        When she reached the first hills of the
                                        Italic Mountains, she had a last view
                                        back on the skyline of her hometown
                                        Bookmarksgrove, the headline of Alphabet
                                        Village and the subline of her own road,
                                        the Line Lane. Pityful a rethoric
                                        question ran over her cheek, then she
                                        continued her way.
                                    </p>
                                </div>

                                <div
                                    class="tab-pane fade"
                                    id="pills-review"
                                    role="tabpanel"
                                    aria-labelledby="pills-review-tab"
                                >
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h3 class="head">23 Reviews</h3>
                                            <div class="review d-flex">
                                                <div
                                                    class="user-img"
                                                    style="
                                                        background-image: url(design/images/person_1.jpg);
                                                    "
                                                ></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left"
                                                            >Jacob Webb</span
                                                        >
                                                        <span class="text-right"
                                                            >14 March 2018</span
                                                        >
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                        </span>
                                                        <span class="text-right"
                                                            ><a
                                                                href="#"
                                                                class="reply"
                                                                ><i
                                                                    class="icon-reply"
                                                                ></i></a
                                                        ></span>
                                                    </p>
                                                    <p>
                                                        When she reached the
                                                        first hills of the
                                                        Italic Mountains, she
                                                        had a last view back on
                                                        the skyline of her
                                                        hometown Bookmarksgrov
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="review d-flex">
                                                <div
                                                    class="user-img"
                                                    style="
                                                        background-image: url(design/images/person_2.jpg);
                                                    "
                                                ></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left"
                                                            >Jacob Webb</span
                                                        >
                                                        <span class="text-right"
                                                            >14 March 2018</span
                                                        >
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                        </span>
                                                        <span class="text-right"
                                                            ><a
                                                                href="#"
                                                                class="reply"
                                                                ><i
                                                                    class="icon-reply"
                                                                ></i></a
                                                        ></span>
                                                    </p>
                                                    <p>
                                                        When she reached the
                                                        first hills of the
                                                        Italic Mountains, she
                                                        had a last view back on
                                                        the skyline of her
                                                        hometown Bookmarksgrov
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="review d-flex">
                                                <div
                                                    class="user-img"
                                                    style="
                                                        background-image: url(design/images/person_3.jpg);
                                                    "
                                                ></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left"
                                                            >Jacob Webb</span
                                                        >
                                                        <span class="text-right"
                                                            >14 March 2018</span
                                                        >
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                        </span>
                                                        <span class="text-right"
                                                            ><a
                                                                href="#"
                                                                class="reply"
                                                                ><i
                                                                    class="icon-reply"
                                                                ></i></a
                                                        ></span>
                                                    </p>
                                                    <p>
                                                        When she reached the
                                                        first hills of the
                                                        Italic Mountains, she
                                                        had a last view back on
                                                        the skyline of her
                                                        hometown Bookmarksgrov
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="rating-wrap">
                                                <h3 class="head">
                                                    Give a Review
                                                </h3>
                                                <div class="wrap">
                                                    <p class="star">
                                                        <span>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            (98%)
                                                        </span>
                                                        <span>20 Reviews</span>
                                                    </p>
                                                    <p class="star">
                                                        <span>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            (85%)
                                                        </span>
                                                        <span>10 Reviews</span>
                                                    </p>
                                                    <p class="star">
                                                        <span>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            (70%)
                                                        </span>
                                                        <span>5 Reviews</span>
                                                    </p>
                                                    <p class="star">
                                                        <span>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            (10%)
                                                        </span>
                                                        <span>0 Reviews</span>
                                                    </p>
                                                    <p class="star">
                                                        <span>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            <i
                                                                class="ion-ios-star"
                                                            ></i>
                                                            (0%)
                                                        </span>
                                                        <span>0 Reviews</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pt">
            <div class="container">
                <div class="row justify-content-center">
                    <div
                        class="col-md-12 heading-section text-center ftco-animate mb-5"
                    >
                        <span class="subheading">Choose Car</span>
                        <h2 class="mb-2">Related Cars</h2>
                    </div>
                </div>
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
                                    <a href="car-single.php"
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
                                        href="car.php"
                                        class="btn btn-primary py-2 mr-1"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.php"
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
                                    <a href="car-single.php">Range Rover</a>
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Subaru</span>
                                    <p class="price ml-auto">
                                        $500 <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    <a
                                        href="car.php"
                                        class="btn btn-primary py-2 mr-1"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.php"
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
                                    <a href="car-single.php"
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
                                        href="car.php"
                                        class="btn btn-primary py-2 mr-1"
                                        >Book now</a
                                    >
                                    <a
                                        href="car-single.php"
                                        class="btn btn-secondary py-2 ml-1"
                                        >Details</a
                                    >
                                </p>
                            </div>
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
                                <a href="index.php" class="logo"
                                    ><span>GODRIVE</span> RENTALS</a
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
