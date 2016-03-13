<?php
    $INTERNAL_LOAD = true;
    require_once('pages/components/page_variables.php');
?>
<!DOCTYPE html>

<html>

    <?php require_once('pages/components/html_head.php') ?>

    <body>
        <div class="container">

            <?php include('pages/components/body_header.php'); ?>

            <?php
                if (!array_key_exists($pageData['page'], $pageData['links'])) {
                    http_response_code(404);
                    echo "<h1>404 Not Found</h1>";
                } else {
                    include($pageData['links'][$pageData['page']]['url']);
                }
            ?>

            <?php include('pages/components/body_footer.php'); ?>

        </div>
    </body>

</html>