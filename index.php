<?php
    $INTERNAL_LOAD = true;
    require_once('pages/components/page_variables.php');
    if (!empty($_GET['mode']) && $_GET['mode'] == 'content') {
        include("pages/{$pageData['page']}.php");
        exit();
    }
?>
<!DOCTYPE html>

<html>

    <?php require_once('pages/components/html_head.php') ?>

    <body>
        <div class="container">

            <?php include('pages/components/body_header.php'); ?>

            <!--  Begin page content  -->
            <div id="content">
                <?php
                    include("pages/{$pageData['page']}.php");
                ?>
            </div>
            <!--  Close page content  -->

            <?php include('pages/components/body_footer.php'); ?>

        </div>
    </body>

</html>