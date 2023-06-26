<?php
session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    include 'config.php';

    // Prepare the SQL query
    $query = "SELECT firstName,lastName FROM registration WHERE email = ?";

    // Prepare the statement
    $stmt = $conn->prepare($query);

    if ($stmt) {
        // Bind the parameter
        $stmt->bind_param('s', $email);

        // Execute the statement
        $stmt->execute();

        // Get the result
        $stmt->bind_result($firstName,$lastName);

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
        <section class="sub-header-feedback">
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
                        <li><a href="blog.php">FEEDBACK</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="GDRLogin.html">SIGNOUT</a></li>
                    </ul>
                </div>

                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>

            <h1>Feedback</h1>
        </section>
        <!-- END nav -->

        <section class="ftco-section ftco-degree-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ftco-animate order-md-last">
                        <h2 class="mb-3">Hit the road with GoDriveRentals</h2>
                        <p>
                            <h5>Rating: ★★★★☆ </h5>I recently had the
                            opportunity to embark on an exciting road trip, and
                            GoDriveRentals played a crucial role in making it a
                            memorable experience. From start to finish, their
                            service was impressive, leaving me with a positive
                            impression. Here's my review of my experience with
                            GoDriveRentals. 
                        </p>
                        <p>
                            <h5>Booking Process: ★★★★☆</h5> The booking
                            process with GoDriveRentals was straightforward and
                            hassle-free. Their website was user-friendly,
                            allowing me to easily browse through a wide
                            selection of cars and compare prices. I appreciated
                            the detailed information provided for each vehicle,
                            including features, specifications, and rental
                            terms. The booking confirmation was sent promptly,
                            and I had all the necessary information at my
                            fingertips. 
                        </p>
                        <p>
                            <h5>Vehicle Quality: ★★★★☆ </h5>I opted for a
                            mid-sized sedan, and I was pleasantly surprised by
                            the excellent condition of the car. It was clean,
                            well-maintained, and equipped with modern features.
                            The vehicle performed admirably throughout my
                            journey, providing a comfortable and smooth ride.
                            However, there were a few minor scratches on the
                            exterior, which didn't affect the overall driving
                            experience but could have been addressed before my
                            rental. 
                        </p>
                        <p>
                            <h5>Customer Service: ★★★★★ </h5>One aspect that
                            truly stood out during my experience with
                            GoDriveRentals was their exceptional customer
                            service. The staff was friendly, knowledgeable, and
                            went above and beyond to assist me. They patiently
                            answered all my queries and provided valuable
                            recommendations based on my travel plans. Their
                            dedication to ensuring customer satisfaction was
                            evident from the moment I picked up the vehicle
                            until I returned it. 
                        </p>
                        <p>
                            <h5>Flexibility and Convenience:
                                ★★★★☆ </h5>GoDriveRentals offered flexibility and
                            convenience that greatly enhanced my road trip. They
                            provided multiple pickup locations, and the process
                            was quick and efficient. Additionally, I appreciated
                            their flexible drop-off options, allowing me to
                            return the car at a different branch. It gave me the
                            freedom to explore different routes and destinations
                            without feeling restricted. 
                        </p>
                        <p>
                            <h5>Value for Money: ★★★★☆</h5>
                            In terms of pricing, GoDriveRentals offered
                            competitive rates compared to other car rental
                            companies. The rental fees were reasonable
                            considering the quality of the vehicle and the level
                            of service provided. However, it would be great to
                            see some additional perks or discounts offered for
                            loyal customers or longer rental durations. 
                        </p>
                        <p><h5>Overall
                            Experience: ★★★★☆ </h5>My overall experience with
                            GoDriveRentals was highly positive. From their
                            user-friendly website and efficient booking process
                            to their friendly customer service and quality
                            vehicles, they delivered a satisfying car rental
                            experience. The minor imperfections with the vehicle
                            and the potential for additional benefits were the
                            only areas where they could improve. Nevertheless, I
                            would highly recommend GoDriveRentals to anyone
                            looking for a reliable and enjoyable car rental
                            service. Hit the road with GoDriveRentals, and
                            you're sure to have a fantastic journey!</p>
                        
                        

                       

                        <div class="pt-5 mt-5">
                            <h3 class="mb-5">3  Comments</h3>
                            <ul class="comment-list" id="comment-list">
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img
                                            src="design/feedbackdesign/images/person_1.jpg"
                                            alt="Image placeholder"
                                        />
                                    </div>
                                    <div class="comment-body">
                                        <h3>Lolo M. O'Blue</h3>
                                        <div class="meta">
                                            Jan 20 7, 2018 at 2:21pm
                                        </div>
                                        <p>
                                            I recently rented a car from GoDriveRentals for a weekend getaway, and I must say, I was impressed! The booking process was a breeze, and the vehicle I chose was clean and comfortable. The staff was friendly and professional, providing me with all the necessary information. The only reason I'm not giving it a full five stars is that the drop-off location was a bit far from my destination. Overall, a great experience with GoDriveRentals!
                                        </p>
                                        <p>
                                            <a href="#" class="reply">Reply</a>
                                        </p>
                                    </div>
                                </li>

                                <li class="comment">
                                    <div class="vcard bio">
                                        <img
                                        src="design/feedbackdesign/images/person_2.jpg"
                                            alt="Image placeholder"
                                        />
                                    </div>
                                    <div class="comment-body">
                                        <h3>Ruben Dimagiba</h3>
                                        <div class="meta">
                                            Jan 21, 2018 at 5:08pm
                                        </div>
                                        <p>
                                            I've rented cars from various companies before, but my recent experience with GoDriveRentals surpassed them all! The booking process was seamless, and the vehicle was in excellent condition, as if it was brand new. The customer service was outstanding, with the staff going above and beyond to ensure I had a great trip. The flexibility to drop off the car at a different branch was a huge convenience. GoDriveRentals has earned my trust, and I'll definitely be using their services again!
                                        </p>
                                        <p>
                                            <a href="#" class="reply">Reply</a>
                                        </p>
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img
                                            src="design/feedbackdesign/images/person_3.jpg"
                                            alt="Image placeholder"
                                        />
                                    </div>
                                    <div class="comment-body">
                                        <h3>Asta La Vista</h3>
                                        <div class="meta">
                                            Jan 21, 2018 at 5:08pm
                                        </div>
                                        <p>
                                            My experience with GoDriveRentals was mostly positive, with a few minor hiccups. The booking process was simple, and the car was comfortable for our road trip. However, we encountered some technical issues with the vehicle's audio system, which affected our overall experience. The customer service was responsive, and they offered a partial refund for the inconvenience. While I appreciate their efforts to resolve the issue, it would have been better if the problem didn't arise in the first place. Despite this setback, I would consider renting from GoDriveRentals again, hoping for a smoother experience next time.
                                        </p>
                                        <p>
                                            <a href="#" class="reply">Reply</a>
                                        </p>
                                    </div>
                                </li>

                               
                            </ul>
                            <!-- END comment-list -->

                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Leave a comment</h3>
                                <form action="#" class="p-5 bg-light">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea
                                            name=""
                                            id="message"
                                            cols="30"
                                            rows="10"
                                            class="form-control"
                                        ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="submit"
                                            value="Post Comment"
                                            class="btn py-3 px-4 btn-primary"
                                            id="post-comment-btn"
                                        />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-8 -->
                    <div class="col-lg-4 sidebar ftco-animate">
                        
                        
                        <div class="sidebar-box ftco-animate">
                            <h3 > <a href="blog.html">Other Reviews</a></h3>
                            <div class="block-21 mb-4 d-flex">
                                <a
                                    class="blog-img mr-4"
                                    style="
                                        background-image: url(design/images/image_2.jpg);
                                    "
                                ></a>
                                <div class="text">
                                    <h3 class="heading">
                                        <a href="#"
                                            >Ready to rock and roll with my bike</a
                                        >
                                    </h3>
                                    <div class="meta">
                                        <div>
                                            <a href="#"
                                                ><span
                                                    class="icon-calendar"
                                                ></span>
                                                Apr 12, 2018</a
                                            >
                                        </div>
                                        
                                        <div>
                                            <a href="#"
                                                ><span class="icon-chat"></span>
                                                3</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-21 mb-4 d-flex">
                                <a
                                    class="blog-img mr-4"
                                    style="
                                        background-image: url(design/images/image_3.jpg);
                                    "
                                ></a>
                                <div class="text">
                                    <h3 class="heading">
                                        <a href="#"
                                            >Lowest price to show off a sports-car</a
                                        >
                                    </h3>
                                    <div class="meta">
                                        <div>
                                            <a href="#"
                                                ><span
                                                    class="icon-calendar"
                                                ></span>
                                                Aug 5, 2018</a
                                            >
                                        </div>
                                        
                                        <div>
                                            <a href="#"
                                                ><span class="icon-chat"></span>
                                                5</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-21 mb-4 d-flex">
                                <a
                                    class="blog-img mr-4"
                                    style="
                                        background-image: url(design/feedbackdesign/images/image_3.jpg);
                                    "
                                ></a>
                                <div class="text">
                                    <h3 class="heading">
                                        <a href="#"
                                            >Classy and Cool. The car is Photoshoot-ready</a
                                        >
                                    </h3>
                                    <div class="meta">
                                        <div>
                                            <a href="#"
                                                ><span
                                                    class="icon-calendar"
                                                ></span>
                                                Sept 9, 2018</a
                                            >
                                        </div>
                                        
                                        <div>
                                            <a href="#"
                                                ><span class="icon-chat"></span>
                                                15</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3>Tag Cloud</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">car</a>
                                <a href="#" class="tag-cloud-link">road</a>
                                <a href="#" class="tag-cloud-link">manila</a>
                                <a href="#" class="tag-cloud-link">laguna</a>
                                <a href="#" class="tag-cloud-link">cavite</a>
                                <a href="#" class="tag-cloud-link">adventure</a>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </section>
        <!-- .section -->

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
        <script>
            document.getElementById('post-comment-btn').addEventListener('click', function(event) {
                event.preventDefault(); // Prevent form submission
        
                // Get the entered message
                var message = document.getElementById('message').value;
        
                // Create the HTML markup for the new comment
                var newComment = `
                    <li class="comment">
                        <div class="vcard bio">
                            <img src="design/feedbackdesign/images/person_4.jpg" alt="Image placeholder" />
                        </div>
                        <div class="comment-body">
                            <h3><?php echo $firstName," ",$lastName; ?></h3>
                            <div class="meta">${getCurrentDate()}</div>
                            <p>${message}</p>
                            <p><a href="#" class="reply">Reply</a></p>
                        </div>
                    </li>
                `;
        
                // Append the new comment to the existing list of comments
                var commentList = document.getElementById('comment-list');
                commentList.innerHTML += newComment;
        
                // Clear the textarea
                document.getElementById('message').value = '';
            });
        
            function getCurrentDate() {
                var currentDate = new Date();
                var month = currentDate.toLocaleString('default', { month: 'short' });
                var day = currentDate.getDate();
                var year = currentDate.getFullYear();
                var time = currentDate.toLocaleTimeString('default', { hour: '2-digit', minute: '2-digit' });
                return `${month} ${day}, ${year} at ${time}`;
            }
        </script>
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
