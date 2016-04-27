<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) { // Throw a 403 error if page is loaded directly
        http_response_code(403);
        echo "403 Bad Request";
        exit();
    }
?><!--  Begin three column layout  -->
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
    <div id="sidebar" class="flex-item-2 flex-mobile-hidden">
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
    </div><!--  Close third column image  -->

</div>
<!--  Close three column layout  -->