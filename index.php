<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- for media quering -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TODO: Rename -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hustlers- Shop online</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html">
                        <img src="images/logo.png" alt="Hustlers" width="125px">
                    </a>
                </div>
                <nav>
                    <ul id="menuItems">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="aboutus.html">About</a></li>
                        <li><a href="account.html">Account</a></li>
                    </ul>
                </nav>
                <img src="images/shopping-cart.png" width="30px" height="30px">
                <img src="images/menu-icon.png" class="menu-icon" onclick="toggleMenu()">

            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Give yourself a <br> fresh look</h1>
                    <a href="" class="btn">Shop Now &#8594</a>
                </div>
                <div class="col-2">
                    <img src="images/main-photo.png">
                </div>
            </div>
        </div>
    </div>

    <!-- categories-features -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/hoodie-feature.jpg" width="300px">
                </div>
                <div class="col-3">
                    <img src="images/hoodie-feature.jpg" width="300px">
                </div>
                <div class="col-3">
                    <img src="images/hoodie-feature.jpg" width="300px">
                </div>
            </div>
        </div>
    </div>

    <!-- featured products -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/hoodie-feature.jpg" alt="">
                <h4>White Printed Hoodie</h4>
                <div class="rating">

                </div>
                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/hoodie-feature.jpg" alt="">
                <h4>White Printed Hoodie</h4>
                <div class="rating">

                </div>
                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/hoodie-feature.jpg" alt="">
                <h4>White Printed Hoodie</h4>
                <div class="rating">

                </div>
                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/hoodie-feature.jpg" alt="">
                <h4>White Printed Hoodie</h4>
                <div class="rating">

                </div>
                <p>30$</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/sweater-product.jpg" alt="">
                <h4>White Printed Hoodie</h4>
                <div class="rating">

                </div>
                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/sweater-product.jpg" alt="">
                <h4>White Printed Hoodie</h4>

                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/sweater-product.jpg" alt="">
                <h4>White Printed Hoodie</h4>
                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/sweater-product.jpg" alt="">
                <h4>White Printed Hoodie</h4>
                <p>30$</p>

            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/sweater-product.jpg" alt="">
                <h4>White Printed Hoodie</h4>
                <div class="rating">

                </div>
                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/sweater-product.jpg" alt="">
                <h4>White Printed Hoodie</h4>

                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/sweater-product.jpg" alt="">
                <h4>White Printed Hoodie</h4>
                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/sweater-product.jpg" alt="">
                <h4>White Printed Hoodie</h4>
                <p>30$</p>

            </div>
        </div>
    </div>


    <!-- Slideshow container -->
    <div class="slide-show">
        <div class="slideshow-container">
            <div class="mySlides">
                <div class="numbertext">1 / 3</div>
                <img src="images/Executive_Hoodie_t600.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img src="images/Executive_Hoodie_t700.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                <img src="images/Executive_Hoodie_t800.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <br>

        <div class="dots-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    <!-- testimonial -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <p>Te besh shop tek Hustlers eshte kenaqesi e vertete, me te vertete jam ndare i kenaqur.
                    </p>
                    <img src="images/korabi.jpg" alt="">
                    <h3>Korab Mulaku</h3>
                </div>
                <div class="col-3">
                    <p>Te besh shop tek Hustlers eshte kenaqesi e vertete, me te vertete jam ndare i kenaqur.
                    </p>
                    <img src="images/riona.jpg" alt="">
                    <h3>Riona Sopi</h3>
                </div>
                <div class="col-3">
                    <p>Te besh shop tek Hustlers eshte kenaqesi e vertete, me te vertete jam ndare i kenaqur.
                    </p>
                    <img src="images/qendrimi-2.jpg" alt="">
                    <h3>Qendrim Cakaj</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <img src="images/logo.png" alt="">
                    <!-- <p>qellimi yne eshte qe te ofrojm per klientet tane nje komoditet te papaprarraraparapare ndonjehere rabi riona meh</p> -->
                </div>
                <div class="footer-col-2">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>
                            Privacy Policy
                        </li>
                        <li>
                            Terms and Contitions
                        </li>
                        <li>
                            Coupons
                        </li>
                    </ul>
                </div>
                <div class="footer-col-3">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Twitter</li>
                        <li>Facebook</li>
                        <li>Instagram</li>
                    </ul>
                </div>

            </div>
            <hr>
            <div class="copyright">Copyright 2020 - Hustlers</div>
        </div>
    </div>

    <script>
        var menuItems = document.getElementById("menuItems");
        menuItems.style.maxHeight = "0px";

        function toggleMenu() {
            if (menuItems.style.maxHeight == "0px") {
                menuItems.style.maxHeight = "200px"
            } else {
                menuItems.style.maxHeight = "0px"
            }
            console.log(menuItems.style.maxHeight)
        }
    </script>
    <script type="text/javascript" src="js/slider.js"></script>
</body>

</html>