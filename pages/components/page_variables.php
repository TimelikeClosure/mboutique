<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) {
        http_response_code(403);
        echo "403 Bad Request";
        exit();
    }
?><?php

    //  Begin page attributes
    $pageData['links'] = [
        'welcome'=>[ // Welcome page
            'name'=>'welcome',
            'title'=>"Welcome to MBoutique!",
            'images'=>[
                'jumbotron'=>[
                    'src'=>"assets/images/welcome-image.png",
                    'alt'=>"Close-up of macarons"
                ]
            ]
        ], 'our_macarons'=>[ // Our Macarons page
            'name'=>'our macarons',
            'title'=>"Our macarons are freshly made by hand",
            'images'=>[
                'jumbotron'=>[
                    'src'=>"assets/images/our-macarons-image.png",
                    'alt'=>"Close-up of macarons"
                ]
            ]
        ], 'gifts_parties'=>[ // Gifts & Parties page
            'name'=>'gifts &amp; parties',
            'title'=>"Let's eat macarons!",
            'images'=>[
                'jumbotron'=>[
                    'src'=>"assets/images/gifts-parties-image.png",
                    'alt'=>"Macarons in a gift basket"
                ]
            ]
        ], 'contact'=>[ // Contact page
            'name'=>'contact',
            'title'=>"Visit us!",
            'images'=>[
                'jumbotron'=>[
                    'src'=>"assets/images/contact-image.png",
                    'alt'=>"Map of MBoutique's location"
                ]
            ]
        ], 'error'=>[ // 404 Error page
            'name'=>'error',
            'title'=>"Page not found",
            'images'=>[
                'jumbotron'=>[
                    'src'=>"",
                    'alt'=>""
                ]
            ]
        ]
    ];
    foreach($pageData['links'] as $page => $pageProperties) { // Set image properties common to all pages, but can be replaced on holidays
        $pageData['links'][$page]['images']['logo'] = [
            'src' => 'assets/images/logo.png',
            'alt' => 'MBoutique logo'
        ];
        $pageData['links'][$page]['images']['sidebar'] = [
            'src' => 'assets/images/macarons-image.png',
            'alt' => 'Vector graphic of macarons'
        ];
    }
    //  End page attributes

    //  Begin page selection
    if (empty($_GET['page'])) { // In case no page is requested, set current page to default welcome page
        $pageData['page'] = 'welcome';
    } else if (!array_key_exists($_GET['page'], $pageData['links'])) { // In case requested page is invalid, set current page to error page
        $pageData['page'] = "error";
    } else { // In case valid page is requested, set as current page
        $pageData['page'] = $_GET['page'];
    }
    if ($pageData['page'] == 'error') { // In case current page is error page, throw 404 error
        http_response_code(404);
    }
    //  End page selection

    //  Begin holiday selection and attributes
    $pageData['holiday'] = [];
    $currentDate = date("m/d");
    switch ($currentDate) { // Choose override content and styling on special holidays
        case "07/04": // 4th of July
            $pageData['holiday']['stylesheet'] = "pages/stylesheets/4th-of-july.css";
            $pageData['holiday']['images']['logo']['src'] = 'assets/images/logo-inverted.png';
            $pageData['holiday']['images']['sidebar']['src'] = 'assets/images/macarons-4th-of-july.jpg';
            $pageData['holiday']['images']['sidebar']['alt'] = 'Red, white, and blue macarons';
            break;
        case "10/31": // Halloween
            $pageData['holiday']['stylesheet'] = "pages/stylesheets/halloween.css";
            $pageData['holiday']['images']['logo']['src'] = 'assets/images/logo-inverted.png';
            $pageData['holiday']['images']['sidebar']['src'] = 'assets/images/macarons-halloween.jpg';
            $pageData['holiday']['images']['sidebar']['alt'] = 'Red, white, and blue macarons';
            break;
        case "12/25": // Christmas
            $pageData['holiday']['stylesheet'] = "pages/stylesheets/christmas.css";
            $pageData['holiday']['images']['logo']['src'] = 'assets/images/logo-inverted.png';
            $pageData['holiday']['images']['sidebar']['src'] = 'assets/images/macarons-christmas.jpg';
            $pageData['holiday']['images']['sidebar']['alt'] = 'Macarons Christmas tree';
            break;
        default: // No holiday
            break;
    }
    //  End holiday selection and attributes
?>