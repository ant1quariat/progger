<?php
function url_route() {
    $rout = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch ($rout) {
        case '/':
            include_once 'Public/Pages/Home.php';
            break;
        case '/news':
            include_once 'Public/Pages/News.php';
            break;
        case '/profile':
            include_once 'Public/Pages/Profile.php';
            break;
        case '/group':
            include_once 'Public/Pages/Group.php';
            break;
        case '/discussion':
            include_once 'Public/Pages/Discussion.php';
            break;
        default:
            echo '404';
            break;
    }
}