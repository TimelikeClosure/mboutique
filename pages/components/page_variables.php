<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) {
        echo "Page cannot be loaded directly";
        exit();
    }
?><?php

    //  Begin page defaults
    $pageData['links'] = [
        'welcome'=>[
            'name'=>'welcome',
            'url'=>'pages/welcome.php'
        ], 'our_macarons'=>[
            'name'=>'our macarons',
            'url'=>'pages/our_macarons.php'
        ], 'gifts_parties'=>[
            'name'=>'gifts &amp; parties',
            'url'=>'pages/gifts_parties.php'
        ], 'contact'=>[
            'name'=>'contact',
            'url'=>'pages/contact.php'
        ]
    ];
    $pageData['images']['logo'] = [
        'src' => 'assets/images/logo.png',
        'alt' => 'MBoutique logo'
    ];
    $pageData['images']['sidebar'] = [
        'src' => 'assets/images/macarons-image.png',
        'alt' => 'Vector graphic of macarons'
    ];
    //  End page defaults

    //  Begin page specifics
    if (empty($_GET['page'])) {
        $pageData['page'] = 'welcome';
    } else {
        $pageData['page'] = $_GET['page'];
    }
    switch($pageData['page']) {
        case 'welcome':
            $pageData['title'] = "Welcome to MBoutique!";
            $pageData['images']['jumbotron']['src'] = "assets/images/welcome-image.png";
            $pageData['images']['jumbotron']['alt'] = "Close-up of macarons";
            break;
        case 'our_macarons':
            $pageData['title'] = "Our macarons are freshly made by hand";
            $pageData['images']['jumbotron']['src'] = "assets/images/our-macarons-image.png";
            $pageData['images']['jumbotron']['alt'] = "Close-up of macarons";
            break;
        case 'gifts_parties':
            $pageData['title'] = "Let's eat macarons!";
            $pageData['images']['jumbotron']['src'] = "assets/images/gifts-parties-image.png";
            $pageData['images']['jumbotron']['alt'] = "Macarons in a gift basket";
            break;
        case 'contact':
            $pageData['title'] = "Visit us!";
            $pageData['images']['jumbotron']['src'] = "assets/images/contact-image.png";
            $pageData['images']['jumbotron']['alt'] = "Close-up of macarons";
            break;
        default:
            $pageData['title'] = "Page not found";
            $pageData['images']['jumbotron']['src'] = "";
            $pageData['images']['jumbotron']['alt'] = "";
            break;
    }
    //  End page specifics

    //  Begin holidays
    $pageData['holidayStyleSheet'] = false;
    $currentDate = date("m/d");
    switch ($currentDate) {
        case "07/04":
            $pageData['holidayStyleSheet'] = "pages/stylesheets/4th-of-july.css";
            $pageData['images']['logo']['src'] = 'assets/images/logo-inverted.png';
            $pageData['images']['sidebar']['src'] = 'assets/images/macarons-4th-of-july.jpg';
            $pageData['images']['sidebar']['alt'] = 'Red, white, and blue macarons';
            break;
        case "10/31":
            $pageData['holidayStyleSheet'] = "pages/stylesheets/halloween.css";
            $pageData['images']['logo']['src'] = 'assets/images/logo-inverted.png';
            $pageData['images']['sidebar']['src'] = 'assets/images/macarons-halloween.jpg';
            $pageData['images']['sidebar']['alt'] = 'Red, white, and blue macarons';
            break;
        case "12/25":
            $pageData['holidayStyleSheet'] = "pages/stylesheets/christmas.css";
            $pageData['images']['logo']['src'] = 'assets/images/logo-inverted.png';
            $pageData['images']['sidebar']['src'] = 'assets/images/macarons-christmas.jpg';
            $pageData['images']['sidebar']['alt'] = 'Macarons Christmas tree';
            break;
        default:
            break;
    }
    //  End holidays
?>