<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) { // Throw a 403 error if page is loaded directly
        http_response_code(403);
        echo "403 Bad Request";
        exit();
    }
?><main id="page-main">
    <h1>404 Not Found</h1>
    <p>The page you are looking for could not be located.</p>
</main>