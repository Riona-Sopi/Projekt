<?php
$website_title = 'All Products';
include 'includes/header.php';
$products = new Products();
$result = $products->getProducts();
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
    <div class="small-container">
        <div class=" row row-2">
            <h2>All Products</h2>
            <select>
                <option>Sort by default</option>
                <option>Sort by price</option>
            </select>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/hoodie-feature.jpg" class="product">
                <h4>White Printed Hoodie</h4>
                <div class="rating">

                </div>
                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/hoodie-feature.jpg" class="product">
                <h4>White Printed Hoodie</h4>
                <div class="rating">

                </div>
                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/hoodie-feature.jpg" class="product">
                <h4>White Printed Hoodie</h4>
                <div class="rating">

                </div>
                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/hoodie-feature.jpg" class="product">
                <h4>White Printed Hoodie</h4>
                <div class="rating">

                </div>
                <p>30$</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/hoodie-feature.jpg" class="product">
                <h4>White Printed Hoodie</h4>
                <div class="rating">

                </div>
                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/hoodie-feature.jpg" class="product">
                <h4>White Printed Hoodie</h4>
                <div class="rating">

                </div>
                <p>30$</p>
            </div>
            <div class="col-4">
                <img src="images/hoodie-feature.jpg" class="product">
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
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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
    </script>

    <script>
        var allProducts = document.querySelectorAll(".product");
        allProducts.forEach(element => {
            element.onclick = function() {
                window.location.href = "product-details.html";
            }

        });
    </script>
</body>

</html>