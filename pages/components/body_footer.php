<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) { // Throw a 403 error if page is loaded directly
        http_response_code(403);
        echo "403 Bad Request";
        exit();
    }
?><!--  Begin page footer  -->
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