<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) {
        http_response_code(403);
        echo "403 Bad Request";
        exit();
    }
?><?php

    //  Begin page defaults
    $pageData['links'] = [
        'welcome'=>[
            'name'=>'welcome',
            'url'=>'pages/welcome.php',
            'title'=>"Welcome to MBoutique!",
            'images'=>[
                'jumbotron'=>[
                    'src'=>"assets/images/welcome-image.png",
                    'alt'=>"Close-up of macarons"
                ]
            ]
        ], 'our_macarons'=>[
            'name'=>'our macarons',
            'url'=>'pages/our_macarons.php',
            'title'=>"Our macarons are freshly made by hand",
            'images'=>[
                'jumbotron'=>[
                    'src'=>"assets/images/our-macarons-image.png",
                    'alt'=>"Close-up of macarons"
                ]
            ]
        ], 'gifts_parties'=>[
            'name'=>'gifts &amp; parties',
            'url'=>'pages/gifts_parties.php',
            'title'=>"Let's eat macarons!",
            'images'=>[
                'jumbotron'=>[
                    'src'=>"assets/images/gifts-parties-image.png",
                    'alt'=>"Macarons in a gift basket"
                ]
            ]
        ], 'contact'=>[
            'name'=>'contact',
            'url'=>'pages/contact.php',
            'title'=>"Visit us!",
            'images'=>[
                'jumbotron'=>[
                    'src'=>"assets/images/contact-image.png",
                    'alt'=>"Map of MBoutique's location"
                ]
            ]
        ], 'error'=>[
            'name'=>'error',
            'url'=>'pages/components/error.php',
            'title'=>"Page not found",
            'images'=>[
                'jumbotron'=>[
                    'src'=>"",
                    'alt'=>""
                ]
            ]
        ]
    ];
    foreach($pageData['links'] as $page => $pageProperties) {
        $pageData['links'][$page]['images']['logo'] = [
            'src' => 'assets/images/logo.png',
            'alt' => 'MBoutique logo'
        ];
        $pageData['links'][$page]['images']['sidebar'] = [
            'src' => 'assets/images/macarons-image.png',
            'alt' => 'Vector graphic of macarons'
        ];
    }
    //  End page defaults

    //  Begin page specifics
    if (empty($_GET['page'])) {
        $pageData['page'] = 'welcome';
    } else if (!array_key_exists($_GET['page'], $pageData['links'])) {
        $pageData['page'] = "error";
    } else {
        $pageData['page'] = $_GET['page'];
    }
    if ($pageData['page'] == 'error') {
        http_response_code(404);
    }
    //  End page specifics

    //  Begin holidays
    $pageData['holiday'] = [];
    $currentDate = date("m/d");
    switch ($currentDate) {
        case "07/04":
            $pageData['holiday']['stylesheet'] = "pages/stylesheets/4th-of-july.css";
            $pageData['holiday']['images']['logo']['src'] = 'assets/images/logo-inverted.png';
            $pageData['holiday']['images']['sidebar']['src'] = 'assets/images/macarons-4th-of-july.jpg';
            $pageData['holiday']['images']['sidebar']['alt'] = 'Red, white, and blue macarons';
            break;
        case "10/31":
            $pageData['holiday']['stylesheet'] = "pages/stylesheets/halloween.css";
            $pageData['holiday']['images']['logo']['src'] = 'assets/images/logo-inverted.png';
            $pageData['holiday']['images']['sidebar']['src'] = 'assets/images/macarons-halloween.jpg';
            $pageData['holiday']['images']['sidebar']['alt'] = 'Red, white, and blue macarons';
            break;
        case "12/25":
            $pageData['holiday']['stylesheet'] = "pages/stylesheets/christmas.css";
            $pageData['holiday']['images']['logo']['src'] = 'assets/images/logo-inverted.png';
            $pageData['holiday']['images']['sidebar']['src'] = 'assets/images/macarons-christmas.jpg';
            $pageData['holiday']['images']['sidebar']['alt'] = 'Macarons Christmas tree';
            break;
        default:
            break;
    }
    //  End holidays
?>