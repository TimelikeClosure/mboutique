<head>
    <meta charset="utf-8" />
    <title><?=$pageData['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <?php
        if ($pageData['holidayStyleSheet']) {
            ?>
            <link href="<?=$pageData['holidayStyleSheet']?>" rel="stylesheet" type="text/css" />
            <?php
        }
    ?>
</head>