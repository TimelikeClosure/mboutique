<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) { // Throw a 403 error if page is loaded directly
        http_response_code(403);
        echo "403 Bad Request";
        exit();
    }
?>
<!--  Begin contacts  -->
<div class="contact">
    <div class="contact-method contact-mail">order@mboutique.com</div>
    <div class="contact-method contact-phone">949.800.3111</div>
    <div class="contact-method contact-social-media">
        <div>Follow us</div>
        <div class="contact-method contact-facebook"></div>
        <div class="contact-method contact-twitter"></div>
    </div>
</div>
<!--  Close contacts  -->

<!--  Copyright  -->
<div class="copyright">Copyright &copy;2014 MBoutique. All rights reserved.</div>