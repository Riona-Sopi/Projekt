<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- for media quering -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TODO: Rename -->
    <title>Product Details</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
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
    </div>
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/korabi.jpg" width="100%" id="productImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/korabi.jpg" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/riona.jpg" class="small-img">

                    </div>
                    <div class="small-img-col">
                        <img src="images/qendrimi-2.jpg" class="small-img">

                    </div>
                    <div class="small-img-col">
                        <img src="images/korabi.jpg" class="small-img">

                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Home / Hoodie</p>
                <h1>Red Hoodie by superinjo</h1>
                <h4>80$</h4>
                <select>
                    <option>Select Size</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add To Cart</a>
                <h3>Product Details</h3>
                <br>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                    quia voluptas sit</p>
            </div>
        </div>
    </div>

    <!-- title -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>

    <div class="small-container">
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

    <!-- toggle menu -->
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

    <!-- product gallery -->
    <script>
        var productImg = document.getElementById("productImg");
        // var smallImg = document.getElementsByClassName("small-img");
        var smallImgs = document.querySelectorAll(".small-img");
        console.log(smallImgs);
        smallImgs.forEach(element => {
            element.onclick = function() {
                productImg.src = element.src;
            }
        });

        // smallImg[0].onclick = function() {
        //     productImg.src = smallImg[0].src;
        // }
        // smallImg[1].onclick = function() {
        //     productImg.src = smallImg[1].src;
        // }
        // smallImg[2].onclick = function() {
        //     productImg.src = smallImg[2].src;
        // }
        // smallImg[3].onclick = function() {
        //     productImg.src = smallImg[3].src;
        // }

        // }
    </script>

</body>

</html>