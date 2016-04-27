<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) { // Throw a 403 error if page is loaded directly
        http_response_code(403);
        echo "403 Bad Request";
        exit();
    }
?><!--  Begin page main  -->
<div class="bkgrd-image bkgrd-our-macarons">
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
</div>
<!--  Close page main  -->