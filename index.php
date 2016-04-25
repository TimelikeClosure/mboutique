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
            <!--  Begin page header  -->
            <header id="page-header">
                <?php include('pages/components/body_header.php'); ?>
            </header>
            <!--  Close page header  -->

            <!--  Begin page content  -->
            <div id="content">
                <?php include("pages/{$pageData['page']}.php"); ?>
            </div>
            <!--  Close page content  -->

            <!--  Begin page footer  -->
            <footer id="page-footer">
                <?php include('pages/components/body_footer.php'); ?>
            </footer>
            <!--  Close page footer  -->

        </div>
    </body>

</html>