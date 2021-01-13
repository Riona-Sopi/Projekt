<?php
$website_title = 'Learn more about us';
include 'includes/header.php';
?>

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

    <!-- About us Text -->
    <div class="container1">
        <div class="container2">
            <p class="in">About Us</p>
            <p class="inner">
                The wish for a better and healthier environment is what inspired us to create HUSTLERS.
            </p>
            <p class="par1">
                We are a small company that ethically produces hoodies made from recycled plastic. Our recycled plastic is made from plastic bottles, recycled down wool, polyester, and nylon. While our products might not make a big impact in the world, we are decisive
                in working very hard at creating a better future for the upcoming generations.
            </p>
            <p class="par2">
                Our designs are the wardrobe for your dynamic lifestyle, using ethical and biodegradable fabrics which are both long-lasting and of high quality. Who says you can’t get off the grid and maintain your modern sensibilities? If you care about fashion, and
                the future, HUSTLERS is the brand for you.
            </p>
            <div class="categories">
                <div class="small-container">
                    <p class="thefounders"><b>THE FOUNDERS</b></p>
                    <div class="row">
                        <div class="col-3">
                            <img src="images/korabi.jpg" width="300px">
                            <h2>Korab Mulaku</h2>
                            <p class="role"><i>Creative Director & Lead Designer</i></p>
                        </div>
                        <div class="col-3">
                            <img src="images/riona.jpg" width="300px">
                            <h2>Riona Sopi</h2>
                            <p class="role"><i>Manager</i></p>
                        </div>
                        <div class="col-3">
                            <img src="images/qendrimi-2.jpg" width="300px">
                            <h2>Qendrim Cakaj</h2>
                            <p class="role"><i>Salesman</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Contact-Title">
            <h1>Contact Us</h1>
        </div>
        <div class="contact-form">
            <form name="ContactForm" id="contact-form" method="post">
                <input name="Name" type="text" class="form-control" placeholder="Your Full name" required><br>
                <input name="Address" type="text" class="form-control" placeholder="Your Address" required><br>
                <input name="Email" type="email" class="form-control" placeholder="Your Email" required><br>
                <input name="Phone" type="tel" class="form-control" placeholder="Your Phone No." required><br>
                <textarea name="Message" class="form-control" placeholder="Message" rows="5" required></textarea><br>
                <button id='btn_submit_form' type="submit" class="form-control submit">SEND</button>
            </form>
        </div>
    </div>



    <?php
include 'includes/footer.php'; ?>

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

        // function validate() {
        //     var name = document.forms["ContactForm"]["Name"];
        //     var address = document.forms["ContactForm"]["Address"];
        //     var phone = document.forms["ContactForm"]["Phone"];
        //     var email = document.forms["ContactForm"]["Email"];
        //     var message = document.forms["ContactForm"]["Message"];

        //     function isString(x) {
        //         return Object.prototype.toString.call(x) === '[object String]';
        //     }
        //     if (name.value == "" && !isString(name)) {
        //         window.alert("Please enter your name.");
        //         name.focus();
        //         return false;
        //     }
        // }
    </script>
</body>

</html>