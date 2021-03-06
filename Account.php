<!DOCTYPE html>
<html>

<head>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Account</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <style>
            /* body {
                font-family: Arial, Helvetica, sans-serif;
            } */
            
            .form2 {
                /* border: 3px solid #DCDCDC; */
                /* width: 100%;
                max-width: ; */
                display: flex;
                align-items: center;
                max-width: 500px;
            }
            
            form {
                flex: 1;
            }
            
            input[type=text],
            input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            
            button {
                background-color: lightblue;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            
            button:hover {
                opacity: 0.8;
            }
            
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #7fd3ec;
            }
            
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }
            
            .container {
                padding: 16px;
                display: block;
            }
            
            span.psw {
                float: right;
                padding-top: 16px;
            }
        </style>
    </head>

    <body>

        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="/">
                        <img src="images/logo.png" alt="Hustlers" width="125px">
                    </a>
                </div>
                <nav>
                    <ul id="menuItems">
                    <li><a href="/">Home</a></li>
                        <li><a href="products">Products</a></li>
                        <li><a href="aboutus">About</a></li>
                        <li><a href="account">Account</a></li>
                    </ul>
                </nav>
                <img src="images/shopping-cart.png" width="30px" height="30px">
                <img src="images/menu-icon.png" class="menu-icon" onclick="toggleMenu()">
            </div>
        </div>

        <form action="/action_page.php" method="post">
            <div class="imgcontainer">
                <img src="images/logo.png" alt="Hustlers" width="125px">
            </div>
            <div class="container form2">
                <div class="container form2">
                    <label for="uname"><b>Useri</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Passi</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                    <button type="submit" id="butoni">Don't have one? Sign up Now</button>
                    <script>
                        var btn = document.getElementById('butoni');
                        btn.addEventListener('click', function() {
                        document.location.href = 'Register.php';
                        });
                    </script>
                    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember 
     </label>
                </div>

                <div class="container form2" style="text-align: center;">
                    <button type="button" class="psw">Forgot <a href="#">password?</a></button>
                    <button type="button" class="cancelbtn">Cancel</button>
                </div>
            </div>
        </form>
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
    </body>

</html>