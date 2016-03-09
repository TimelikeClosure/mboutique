<head>
    <meta charset="utf-8" />
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <?php
        if ($holidayStyleSheet) {
            ?>
            <link href="<?=$holidayStyleSheet?>" rel="stylesheet" type="text/css" />
            <?php
        }
    ?>
</head>