<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Welcome to MBoutique!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="container">

            <!--  Begin page header  -->
            <header id="page-header">
                <!--  Begin header bar  -->
                <div class="page-header-bar" >
                    <!--  Begin header logo  -->
                    <div class="header-logo">
                        <img src="assets/images/logo.png" />
                    </div>
                    <!--  Close header logo  -->

                    <!--  Begin navigation bar  -->
                    <nav>
                        <ul>
                            <li><a href="index.php">welcome</a></li>
                            <li><a href="our_macarons.php">our macarons</a></li>
                            <li><a href="gifts_parties.php">gifts &amp; parties</a></li>
                            <li><a href="contact.php">contact</a></li>
                        </ul>
                    </nav>
                    <!--  Close navigation bar  -->
                </div>
                <!--  Close header bar  -->

                <!--  Begin jumbotron  -->
                <div class="jumbotron">
                    <img src="assets/images/contact-image.png" alt="Close-up of macarons" />
                </div>
                <!--  Close jumbotron  -->
            </header>
            <!--  Close page header  -->

            <!--  Begin page main  -->
            <main id="page-main">

                <!--  Begin three column layout  -->
                <div class="flex-container">

                    <!--  Begin first column article  -->
                    <article class="flex-item-3 flex-item-baseline">
                        <h1>Visit us!</h1>
                        <p>
                            Monday - Friday | 10am - 9pm<br/>
                            Saturday | 10am - 8pm<br/>
                            Sunday | 11am - 7pm<br/>
                            Closed Thanksgiving Day, Christmas Day and Easter Day
                        </p>
                        <p>
                            1625 Post St<br/>
                            San Francisco, CA 94115
                        </p>
                        <p>949.800-3111</p>
                        <p><a href="mailto:order@mboutique.com">order@mboutique.com</a></p>
                        <p>Send your questions, comments and flavor suggestions or place an order!</p>
                    </article>
                    <!--  Close first column article  -->
                    <hr />
                    <!--  Begin second column form  -->
                    <div class="flex-item-3 flex-item-baseline">
                        <h1>Contact Form</h1>
                        <form action="http://learningfuze.com/echo.php" method="post">
                            <input type="text" name="name" placeholder=" Name" required/>
                            <input type="email" name="email" placeholder=" Email" />
                            <input type="tel" name="phone" placeholder=" Phone" />
                            <input type="text" name="subject" placeholder=" Subject" required/>
                            <textarea name="message" placeholder=" Message" required></textarea>
                            <button type="submit" name="submit">SEND</button>
                        </form>
                    </div>
                    <!--  Close second column form  -->

                    <!--  Begin third column image  -->
                    <div class="flex-item-2 flex-mobile-hidden">
                        <img src="assets/images/macarons-image.png" alt="Vector graphic of macarons" />
                    </div>
                    <!--  Close third column image  -->

                </div>
                <!--  Close three column layout  -->

            </main>
            <!--  Close page main  -->

            <!--  Begin page footer  -->
            <footer id="page-footer">
                <!--  Begin contacts  -->
                <div class="contact">
                    <div><div class="contact-mail">order@mboutique.com</div></div>
                    <div><div class="contact-phone">949.800.3111</div></div>
                    <div><div class="contact-social-media">Follow us
                        <img class="contact-facebook" src="assets/images/facebook.png" />
                        <img class="contact-twitter" src="assets/images/twitter.png" /></div>
                </div></div>
                <!--  Close contacts  -->

                <!--  Copyright  -->
                <div class="copyright">Copyright &copy;2014 MBoutique. All rights reserved.</div>

            </footer>
            <!--  Close page footer  -->

        </div>
    </body>

</html>