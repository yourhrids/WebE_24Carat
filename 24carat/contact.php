<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font-Awesome  Link-up -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/shop.css">
    <style>
        .error-msg {
            color: red;
            font-size: 0.9em;
            margin-bottom: 10px;
            display: block;
        }
    </style>

</head>

<body>
    <header>
        <nav>
            <section id="header">
                <a href="homepage.php"><img src="assets/24Carat.png" class="logo" alt=""></a>
                <div class="mainmenu">
                    <ul id="navbar">
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a class="active" href="contact.php">Contact</a></li>
                        <li class="lg-bag"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                        <a href="" id="close"><i class="fa-solid fa-xmark"></i></a>
                    </ul>
                </div>
                <div id="mobile">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <i id="bar" class="fa-solid fa-outdent"></i>
                </div>
            </section>
        </nav>
    </header>

    <main>
        <section id="shop-hero" class="about-bg">
            <h2>Super value deals</h2>
            <p>Save more with coupons & up to 70% off!</p>
        </section>


        <section id="contact-details" class="section-p1">
            <div class="details">
                <span>Lorem ipsum dolor</span>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, dolor!</h3>
                <h4>Head Office</h4>
                <div>
                    <ul>
                        <li><i class="fa-solid fa-map"></i>Lorem ipsum dolor sit</li>
                        <li><i class="fa-solid fa-map"></i>Lorem ipsum dolor sit</li>
                        <li><i class="fa-solid fa-map"></i>Lorem ipsum dolor sit</li>
                        <li><i class="fa-solid fa-map"></i>Lorem ipsum dolor sit</li>
                    </ul>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14594.588048550295!2d90.30427515506749!3d23.86666517542041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1f7ed5f4193%3A0x8159af0d71ff7374!2sEastern%20University!5e0!3m2!1sen!2sbd!4v1694702330621!5m2!1sen!2sbd"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section id="form" class="section-p1">
            <div class="form-area">
                <h3>Leave a message</h3>
                <h2>Lorem ipsum dolor sit amet consectetur</h2>
                <form id="contactForm" novalidate>
                    <input type="text" id="name" placeholder="Your Name" required>
                    <span id="nameError" class="error-msg"></span>

                    <input type="email" id="email" placeholder="E-mail" required>
                    <span id="emailError" class="error-msg"></span>

                    <input type="text" id="subject" placeholder="Subject" required>
                    <span id="subjectError" class="error-msg"></span>

                    <textarea id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                    <span id="messageError" class="error-msg"></span>

                    <button type="submit" id="submitBtn">Send Message</button>
                </form>
            </div>
        </section>



        <section id="newsletter" class="section-p1">
            <div class="newsletter-content">
                <h4>Sign up for Newsletter</h4>
                <p>Lorem ipsum dolor sit amet consectetur <span>adipisicing elit</span></p>
            </div>
            <div class="form">
                <input type="email" placeholder="Your email address">
                <input type="submit" value="Sign Up">
            </div>
        </section>
    </main>

    <footer class="section-p1">
        <div class="col">
            <a href="homepage.php"><img src="./assets/24Carat.png" class="footer-logo" alt=""></a>
            <h4>Contact</h4>
            <p><Strong>Address: </Strong>Lorem ipsum dolor sit amet Lorem</p>
            <p><Strong>Phone: </Strong>+01 2222 365/ (+91) 9380 9142</p>
            <p><Strong>Hours: </Strong>10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow US</h4>
                <div class="icon-menu">
                    <ul>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-tiktok"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-wordpress"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="footer-menu">
                <h4>About</h4>
                <div class="footer-menu-content">
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Delivery Information</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms &amp; Conditions</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="footer-menu">
                <h4>My Account</h4>
                <div class="footer-menu-content">
                    <ul>
                        <li><a href="">Sign In</a></li>
                        <li><a href="">View Cart</a></li>
                        <li><a href="">My Wishlist</a></li>
                        <li><a href="">Track My Order</a></li>
                        <li><a href="">Help</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>Lorem ipsum dolor sit amet</p>
            <div class="row">
                <img src="assets/pay/app.jpg" alt="">
                <img src="assets/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="assets/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p> &copy; copyright.All resved for this company</p>
        </div>
    </footer>

    <!-- Jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="./js/app.js"></script>
    <script>
        document.getElementById("contactForm").addEventListener("submit", function(e) {
            e.preventDefault(); // prevent form submission

            let isValid = true;

            // Get values
            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const subject = document.getElementById("subject").value.trim();
            const message = document.getElementById("message").value.trim();

            // Error spans
            const nameError = document.getElementById("nameError");
            const emailError = document.getElementById("emailError");
            const subjectError = document.getElementById("subjectError");
            const messageError = document.getElementById("messageError");

            // Reset error messages
            nameError.textContent = "";
            emailError.textContent = "";
            subjectError.textContent = "";
            messageError.textContent = "";

            // Name validation (letters and white spaces only)
            const nameRegex = /^[A-Za-z\s]+$/;
            if (!nameRegex.test(name)) {
                nameError.textContent = "Name can only contain letters and spaces.";
                isValid = false;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                emailError.textContent = "Please enter a valid email address.";
                isValid = false;
            }

            // Subject validation
            if (subject === "") {
                subjectError.textContent = "Subject is required.";
                isValid = false;
            }

            // Message validation
            if (message === "") {
                messageError.textContent = "Message is required.";
                isValid = false;
            }

            // If all fields valid
            if (isValid) {
                alert("Message sent successfully!");
                document.getElementById("contactForm").reset();
            }
        });
    </script>

</body>

</html>