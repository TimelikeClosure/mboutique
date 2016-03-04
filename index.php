<?php
    $holidayStyleSheet = false;
    $logoImage = [
        'src' => 'assets/images/logo.png',
        'alt' => 'MBoutique logo'
    ];
    $sidebarImage = [
        'src' => 'assets/images/macarons-image.png',
        'alt' => 'Vector graphic of macarons'
    ];
    $currentDate = date("m/d");
    switch ($currentDate) {
        case "07/04":
            $holidayStyleSheet = "4th-of-july.css";
            $logoImage['src'] = 'assets/images/logo-inverted.png';
            $sidebarImage['src'] = 'assets/images/macarons-4th-of-july.jpg';
            $sidebarImage['alt'] = 'Red, white, and blue macarons';
            break;
        case "03/04":
            $holidayStyleSheet = "christmas.css";
            $logoImage['src'] = 'assets/images/logo-inverted.png';
            $sidebarImage['src'] = 'assets/images/macarons-christmas.jpg';
            $sidebarImage['alt'] = 'Macarons Christmas tree';
            break;
        default:
            break;
    }
?>
<!--Add Your home page HTML here-->
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Welcome to MBoutique!</title>
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
                        <img src="<?="{$logoImage['src']}"?>" alt="<?="{$logoImage['alt']}"?>" />
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
                    <img src="assets/images/welcome-image.png" alt="Close-up of macarons" />
                </div>
                <!--  Close jumbotron  -->
            </header>
            <!--  Close page header  -->

            <!--  Begin page main  -->
            <main id="page-main">

                <!--  Begin two column layout  -->
                <div class="two-col-container">

                    <!--  Begin first column image  -->
                    <div class="two-col col-left-25 flex-mobile-hidden">
                        <img src="<?="{$sidebarImage['src']}"?>" alt="<?="{$sidebarImage['alt']}"?>" />
                    </div>
                    <!--  Close first column image  -->

                    <!--  Begin second column article  -->
                    <article class="two-col col-right-75">
                        <h1>Welcome to MBoutique!</h1>
                        <p>We're a home-based baking business that specializes in the making of French macarons, a gluten-free pastry item made from ground almonds. Our business began at the West Reading Farmers Market in 2011. Last year (2013) marked our third and final season of participation at the market. MBoutique was established to pay homage to the delicate French confectionery, the macaron. Our shop has been recognized as the connoisseurs of this delicious French pastry because of the wonderful variety of flavors from our great master chefs.</p>
                        <h1>We love Macarons!</h1>
                        <p>Renowned macarons, French delights of the moment can be met in a variety of flavors and colors and are brilliant precisely because of their simplicity - a crispy coating, but delicate in a loose blanket jam, chocolate butter cream is spread inviting.</p>
                        <p>Macarons combines perfectly with champagne or white wine, tea or hot chocolate, fresh juices and natural fruit flavored coffee and guarantee that these little delights soon become friend that you can not break.</p>
                        <h1>Find the flavor that you like. Try a sample every day!</h1>
                    </article>
                    <!--  Close second column article  -->
                </div>
                <!--  Close two column layout  -->

                <!--  Begin schedule  -->
                <section class="schedule">
                    <div>
                        <div class="schedule-day"><p>Monday</p></div>
                        <div class="schedule-time"><p>15:00 - 16:00</p></div>
                        <div class="schedule-flavor"><p>chocolate</p><img src="assets/images/chocolate.png" /></div>
                        <div class="schedule-flavor coconut"><p>coconut</p><img src="assets/images/coconut.png" /></div>
                    </div><div>
                        <div class="schedule-day"><p>Tuesday</p></div>
                        <div class="schedule-time"><p>14:00 - 15:00</p></div>
                        <div class="schedule-flavor"><p>violet cassis</p><img src="assets/images/violet-cassis.png" /></div>
                        <div class="schedule-flavor"><p>green tea</p><img src="assets/images/green-tea.png" /></div>
                    </div><div>
                        <div class="schedule-day"><p>Wednesday</p></div>
                        <div class="schedule-time"><p>09:00 - 10:00</p></div>
                        <div class="schedule-flavor"><p>passion fruit</p><img src="assets/images/passion-fruit.png" /></div>
                        <div class="schedule-flavor vanilla"><p>vanilla</p><img src="assets/images/vanilla.png" /></div>
                    </div><div>
                        <div class="schedule-day"><p>Thursday</p></div>
                        <div class="schedule-time"><p>18:00 - 19:00</p></div>
                        <div class="schedule-flavor"><p>coffee</p><img src="assets/images/coffee.png" /></div>
                        <div class="schedule-flavor"><p>pistachio</p><img src="assets/images/pistachio.png" /></div>
                    </div><div>
                        <div class="schedule-day"><p>Friday</p></div>
                        <div class="schedule-time"><p>11:00 - 12:00</p></div>
                        <div class="schedule-flavor"><p>raspbery</p><img src="assets/images/raspbery.png" /></div>
                        <div class="schedule-flavor lemon"><p>lemon</p><img src="assets/images/lemon.png" /></div>
                    </div><div>
                        <div class="schedule-day"><p>Saturday</p></div>
                        <div class="schedule-time"><p>13:00 - 14:00</p></div>
                        <div class="schedule-flavor"><p>rose</p><img src="assets/images/rose.png" /></div>
                        <div class="schedule-flavor"><p>tiffany blue</p><img src="assets/images/tiffany-blue.png" /></div>
                    </div><div>
                        <div class="schedule-day"><p>Sunday</p></div>
                        <div class="schedule-time"><p>10:00 - 11:00</p></div>
                        <div class="schedule-flavor"><p>caramel</p><img src="assets/images/caramel.png" /></div>
                        <div class="schedule-flavor almond"><p>almond</p><img src="assets/images/almond.png" /></div>
                    </div>
                </section>
                <!--  Close schedule  -->
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