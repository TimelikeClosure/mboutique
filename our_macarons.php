<?php require('page_variables.php'); ?>
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Our macarons are freshly made by hand</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <?php
            if ($holidayStyleSheet) {
                ?>
                <link href="<?=$holidayStyleSheet?>" rel="stylesheet" type="text/css" />
                <?php
            }
        ?>
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
                    <img src="assets/images/our-macarons-image.png" alt="Close-up of macarons" />
                </div>
                <!--  Close jumbotron  -->
            </header>
            <!--  Close page header  -->

            <!--  Begin page main  -->
            <main id="page-main" class="bkgrd-image bkgrd-our-macarons">
                <!--  Begin one column article  -->
                <div class="flex-container">
                    <article class="flex-item-1 flex-item-baseline">
                        <h1>Our macarons are freshly made by hand</h1>
                        <p>The vivid hues of our macarons reflect the natural flavors and essences that infuse the ganache filling of these delicious almond cookies - each with its own personality, and all of them are made to savour for their delicacy and unique character.</p>
                        <div>
                            <h1>Classics</h1>
                            <ul>
                                <li>caribbean chocolate</li>
                                <li>coconut</li>
                                <li>colombian coffee</li>
                                <li>green tea</li>
                                <li>lemon</li>
                                <li>madagascar vanilla</li>
                                <li>passion fruit</li>
                                <li>rose</li>
                                <li>raspbery</li>
                                <li>tiffany blue</li>
                                <li>sicilian pistachio</li>
                                <li>sweet wedding almond</li>
                                <li>violet cassis</li>
                                <li>salted caramel</li>
                            </ul>
                        </div>
                        <p>After purchase we recommend keeping macarons in the refridgerator, let them come to room temperature before serving - about 10 minutes. For best degustation, out macarons should be consumed within 3 days.</p>
                    </article>
                </div>
                <!--  Close one column article  -->
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
                        <img class="contact-twitter" src="assets/images/twitter.png" /></div></div>
                </div>
                <!--  Close contacts  -->

                <!--  Copyright  -->
                <div class="copyright">Copyright &copy;2014 MBoutique. All rights reserved.</div>

            </footer>
            <!--  Close page footer  -->

        </div>
    </body>

</html>