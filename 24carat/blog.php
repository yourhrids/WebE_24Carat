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
                        <li><a class="active" href="blog.php">Blog</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
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
        <section id="shop-hero" class="blog-bg">
            <h2>Super value deals</h2>
            <p>Save more with coupons & up to 70% off!</p>
        </section>

        <section id="blog">
            <div class="blog-box">
                <div class="blog-image">
                    <h1>13/01</h1>
                    <img src="assets/blog/b1.jpg" alt="">
                </div>
                <div class="blog-details">
                    <h4>Lorem ipsum dolor sit</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam asperiores dolorum nesciunt
                        voluptas illo odio atque veniam voluptatem nam fugiat.</p>
                    <div class="row">
                        <a href="https://www.economist.com/">Continue reading</a>
                        <div class="divider-shape"></div>
                    </div>
                </div>
            </div>
            <div class="blog-box">
                <div class="blog-image">
                    <h1>13/01</h1>
                    <img src="assets/blog/b2.jpg" alt="">
                </div>
                <div class="blog-details">
                    <h4>Lorem ipsum dolor sit</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam asperiores dolorum nesciunt
                        voluptas illo odio atque veniam voluptatem nam fugiat.</p>
                    <div class="row">
                        <a href="https://www.economist.com/">Continue reading</a>
                        <div class="divider-shape"></div>
                    </div>
                </div>
            </div>
            <div class="blog-box">
                <div class="blog-image">
                    <h1>13/01</h1>
                    <img src="assets/blog/b3.jpg" alt="">
                </div>
                <div class="blog-details">
                    <h4>Lorem ipsum dolor sit</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam asperiores dolorum nesciunt
                        voluptas illo odio atque veniam voluptatem nam fugiat.</p>
                    <div class="row">
                        <a href="https://www.economist.com/">Continue reading</a>
                        <div class="divider-shape"></div>
                    </div>
                </div>
            </div>
            <div class="blog-box">
                <div class="blog-image">
                    <h1>13/01</h1>
                    <img src="assets/blog/b4.jpg" alt="">
                </div>
                <div class="blog-details">
                    <h4>Lorem ipsum dolor sit</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam asperiores dolorum nesciunt
                        voluptas illo odio atque veniam voluptatem nam fugiat.</p>
                    <div class="row">
                        <a href="https://www.economist.com/">Continue reading</a>
                        <div class="divider-shape"></div>
                    </div>
                </div>
            </div>
            <div class="blog-box">
                <div class="blog-image">
                    <h1>13/01</h1>
                    <img src="assets/blog/b5.jpg" alt="">
                </div>
                <div class="blog-details">
                    <h4>Lorem ipsum dolor sit</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam asperiores dolorum nesciunt
                        voluptas illo odio atque veniam voluptatem nam fugiat.</p>
                    <div class="row">
                        <a href="https://www.economist.com/">Continue reading</a>
                        <div class="divider-shape"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pagination" class="section-p1">
            <a href="">1</a>
            <a href="">2</a>
            <a href=""><i class="fa-solid fa-arrow-right-long"></i></a>
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
    <script src="js/app.js"></script>
</body>

</html>