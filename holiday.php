<?php
    $holidayStyleSheet = false;
    $logoImage = [
        'src' => 'assets/images/logo.png',
        'alt' => 'MBoutique logo'
    ];
    $sidebarImage = [
        'src' => 'assets/images/macarons-image.png',
        'alt' => 'Vector graphic of macarons'
    ];
    $currentDate = date("m/d");
    switch ($currentDate) {
        case "07/04":
            $holidayStyleSheet = "4th-of-july.css";
            $logoImage['src'] = 'assets/images/logo-inverted.png';
            $sidebarImage['src'] = 'assets/images/macarons-4th-of-july.jpg';
            $sidebarImage['alt'] = 'Red, white, and blue macarons';
            break;
        case "10/31":
            $holidayStyleSheet = "halloween.css";
            $logoImage['src'] = 'assets/images/logo-inverted.png';
            $sidebarImage['src'] = 'assets/images/macarons-halloween.jpg';
            $sidebarImage['alt'] = 'Red, white, and blue macarons';
            break;
        case "12/25":
            $holidayStyleSheet = "christmas.css";
            $logoImage['src'] = 'assets/images/logo-inverted.png';
            $sidebarImage['src'] = 'assets/images/macarons-christmas.jpg';
            $sidebarImage['alt'] = 'Macarons Christmas tree';
            break;
        default:
            break;
    }
?>