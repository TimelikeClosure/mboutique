<?php
    //  Begin page defaults
    $images = [];
    $images['logo'] = [
        'src' => 'assets/images/logo.png',
        'alt' => 'MBoutique logo'
    ];
    $images['sidebar'] = [
        'src' => 'assets/images/macarons-image.png',
        'alt' => 'Vector graphic of macarons'
    ];
    //  End page defaults

    //  Begin page specifics
    switch($page) {
        case 'welcome':
            $title = "Welcome to MBoutique!";
            $images['jumbotron']['src'] = "assets/images/welcome-image.png";
            $images['jumbotron']['alt'] = "Close-up of macarons";
            break;
        case 'our_macarons':
            $title = "Our macarons are freshly made by hand";
            $images['jumbotron']['src'] = "assets/images/our-macarons-image.png";
            $images['jumbotron']['alt'] = "Close-up of macarons";
            break;
        case 'gifts_parties':
            $title = "Let's eat macarons!";
            $images['jumbotron']['src'] = "assets/images/gifts-parties-image.png";
            $images['jumbotron']['alt'] = "Macarons in a gift basket";
            break;
        case 'contact':
            $title = "Welcome to MBoutique!";
            $images['jumbotron']['src'] = "assets/images/contact-image.png";
            $images['jumbotron']['alt'] = "Close-up of macarons";
            break;
    }
    //  End page specifics

    //  Begin holidays
    $holidayStyleSheet = false;
    $currentDate = date("m/d");
    switch ($currentDate) {
        case "07/04":
            $holidayStyleSheet = "4th-of-july.css";
            $images['logo']['src'] = 'assets/images/logo-inverted.png';
            $images['sidebar']['src'] = 'assets/images/macarons-4th-of-july.jpg';
            $images['sidebar']['alt'] = 'Red, white, and blue macarons';
            break;
        case "10/31":
            $holidayStyleSheet = "halloween.css";
            $images['logo']['src'] = 'assets/images/logo-inverted.png';
            $images['sidebar']['src'] = 'assets/images/macarons-halloween.jpg';
            $images['sidebar']['alt'] = 'Red, white, and blue macarons';
            break;
        case "12/25":
            $holidayStyleSheet = "christmas.css";
            $images['logo']['src'] = 'assets/images/logo-inverted.png';
            $images['sidebar']['src'] = 'assets/images/macarons-christmas.jpg';
            $images['sidebar']['alt'] = 'Macarons Christmas tree';
            break;
        default:
            break;
    }
    //  End holidays
?>