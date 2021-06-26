<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Plantita ph</title>
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-wrapper">
        <!-- <nav>
            <div class="outer-shell">
                <div class="logo">
                    <a href="../homepage/index.html"><img src="../navbar/nav-logo.svg" alt="logo"></a>
                </div>     
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <div class="cart">
                    <img src="../navbar/shopping-cart.png" alt="cart">
                    <p id="no-of-items">0</p>
                </div>
            </div>   
            <div class="inner-shell">
                <div class="top-part">
                    <div class="logo2">
                        <img src="../navbar/nav-logo.svg" alt="logo">
                        <p><a href="../homepage/index.html">Plantita.ph</a></p>
                    </div>
                </div>
                <div class="middle-part">
                    <ul class="nav-links">
                        <li>
                            <h1><a href="../homepage/index.html">home</a></h1>
                        </li>
                        <li class="catalogue-container">
                            <h1><a href="../catalogue/index.html">catalogue</a></h1>
                            <p><a href="../catalogue/index.html">homeplants</a></p>
                            <p><a href="../catalogue/index.html">outdoor plants</a></p>   
                            <p><a href="../catalogue/index.html">succulents</a></p>
                        </li>
                        <li>
                            <h1><a href="../about-us/aboutus.html">about</a></h1>
                        </li>
                        <li>
                            <h1><a href="../filler_page/404page.html">guides</a></h1>
                        </li>
                        <li class="sublinks">
                            <p><a href="../signup-login/login.html">sign in</a></p>
                            <p class="current"><a href="#">contact us</a></p>
                            <p><a href="../filler_page/404page.html">policies</a></p>
                            <p><a href="../filler_page/404page.html">help</a></p>
                        </li>
                    </ul>
                    <div class="burger-inside">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </div>
                <div class="cart-inside">
                    <img src="../navbar/shopping-cart.png" alt="cart">
                    <p id="no-of-items">0</p>
                </div>
            </div>
            <div class="shopping-cart">
                <div class="top-part">
                    <div class="logo2">
                        <img src="../navbar/nav-logo.svg" alt="logo">
                        <p><a href="../homepage/index.html">Plantita.ph</a></p>
                    </div>
                    <p class="closing-btn">close</p>
                </div>
                <div class="sc-middle-part">
                    <h1 class="sc-title">My Shopping Cart</h1>
                    <div class="shopping-cart-items">
                        <ul class="shopping-list">
                        </ul>
                    </div>
                </div>
                <div class="cart">
                </div>
            </div>    
        </nav> -->
        <?php
            include_once '../navbar/navbar.php';
        ?>
        <div class="sections">
            <div class="main-content-container">
                <h1>Reach out</h1>
                <div class="second-part" >
                    <div class="sp-title">
                        <h2>Customer Service</h2>
                        <p>help@plantita.ph</p>
                    </div>
                    <div class="sp-title">
                        <h2>General Inquiries</h2>
                        <p>hello@plantita.ph</p>
                    </div>
                </div>
                <div class="third-part">
                    <h2>Or get in touch with the form below:</h2>
                    <form action="#">
                        <div class="style-input">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="cntct-name" required>
                        </div>
                        <div class="style-input">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="cntct-email" required>
                        </div>
                        <div class="style-input">
                            <label for="message">Message</label>
                            <textarea name="message" id="cntct-message" cols="50" rows="3" required></textarea>
                        </div>
                        <input type="submit" value="Submit" class="btn-solid">
                        <!-- <button type="submit" class="btn-solid">Submit</button> -->
                    </form>
                </div>
            </div>
            <footer>
                <div class="footer-container">
                    <div class="footer-logo">
                        <img src="images/Logo.svg" alt="logo-for-footer" class="logo-footer">
                        <h2 class="footer-headings">plantita.ph</h2>
                    </div>
                    <div class="footer-socmeds">
                        <a href="https://facebook.com"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://twitter.com"><i class="fab fa-twitter fa-2x"></i></a>
                    </div>
                    <div class="copyright">
                        <p>Copyright 2021 Plantita.ph. All rights reserved.</p>
                    </div>
                </div>      
            </footer>
        </div>
    </div>
    <script src="../navbar/app.js"></script>
</body>
</html>