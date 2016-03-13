<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) {
        http_response_code(403);
        echo "403 Bad Request";
        exit();
    }
?><head>
    <meta charset="utf-8" />
    <title><?=$pageData['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="pages/stylesheets/style.css" rel="stylesheet" type="text/css" />
    <?php
        if ($pageData['holidayStyleSheet']) {
            ?>
            <link href="<?=$pageData['holidayStyleSheet']?>" rel="stylesheet" type="text/css" />
            <?php
        }
    ?>
</head>