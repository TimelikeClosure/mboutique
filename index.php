<?php
    if (empty($_GET['page'])) {
        $pageData['page'] = 'welcome';
    } else {
        $pageData['page'] = $_GET['page'];
    }
    require_once('page_variables.php');
?>
<!DOCTYPE html>

<html>

    <?php require_once('html_head.php') ?>

    <body>
        <div class="container">

            <?php include('body_header.php'); ?>

            <?php
                if (!array_key_exists($pageData['page'], $pageData['links'])) {
                    print "<h1>404 Error : Page Not Found</h1>";
                } else {
                    include($pageData['links'][$pageData['page']]['url']);
                }
            ?>

            <?php include('body_footer.php'); ?>

        </div>
    </body>

</html>