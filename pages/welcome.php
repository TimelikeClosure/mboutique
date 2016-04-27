<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) { // Throw a 403 error if page is loaded directly
        http_response_code(403);
        echo "403 Bad Request";
        exit();
    }
?><!--  Begin two column layout  -->
<div class="two-col-container">

    <!--  Begin first column image  -->
    <div id="sidebar" class="two-col col-left-25 flex-mobile-hidden">
        <img
            src="<?= // Use holiday image if it exists, otherwise use page image
                empty($pageData['holiday']['images']['sidebar']['src']) ? $pageData['links'][$pageData['page']]['images']['sidebar']['src']
                                                                        : $pageData['holiday']['images']['sidebar']['src']
            ?>"
            alt="<?=
                empty($pageData['holiday']['images']['sidebar']['alt']) ? $pageData['links'][$pageData['page']]['images']['sidebar']['alt']
                                                                        : $pageData['holiday']['images']['sidebar']['alt']
            ?>"
        />
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