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

    <!-- Begin html head -->
    <head>
        <?php require_once('pages/components/html_head.php') ?>
    </head>
    <!-- End html head -->

    <!-- Begin html body -->
    <body>
        <div class="container">
            <!-- Begin Page Header section -->
            <header id="page-header" class="page-header full-border-box">
                <?php include('pages/components/body_header.php'); ?>
            </header>
            <!-- End Page Header section -->

            <!-- Begin Page Main section -->
            <main id="page-main" class="page-main full-border-box">
                <?php include("pages/{$pageData['page']}.php"); ?>
            </main>
            <!-- End Page Main section -->

            <!-- Begin Page Footer section -->
            <footer id="page-footer" class="page-footer full-border-box">
                <?php include('pages/components/body_footer.php'); ?>
            </footer>
            <!-- End Page Footer section -->
        </div>
    </body>
    <!-- End html body -->
</html>