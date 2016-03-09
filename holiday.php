<?php
    $holidayStyleSheet = false;
    $images = [];
    $images['logo'] = [
        'src' => 'assets/images/logo.png',
        'alt' => 'MBoutique logo'
    ];
    switch($page) {
        case 'welcome':
            $images['jumbotron']['src'] = "assets/images/welcome-image.png";
            $images['jumbotron']['alt'] = "Close-up of macarons";
    }
    $images['sidebar'] = [
        'src' => 'assets/images/macarons-image.png',
        'alt' => 'Vector graphic of macarons'
    ];
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
?>