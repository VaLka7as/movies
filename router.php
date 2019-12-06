<?php
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'visi':
            include("templates/" . activeTemplate . "/pages/all-movie-page.php");
            break;
        case 'zanrai':
            include("templates/" . activeTemplate . "/pages/by-genre-movie-page.php");
            break;
        case 'paieska':
            include("templates/" . activeTemplate . "/pages/search-movie-page.php");
             break;
        case 'visiFilmai':
            include("templates/" . activeTemplate . "/pages/all-movie-page.php");
            break;
        case 'pridetiFilma':
            include("templates/" . activeTemplate . "/pages/add-movie-pages.php");
            break;
        case 'filmaiPagalZanra':
            include("templates/" . activeTemplate . "/pages/by-genre-movie-page.php");
            break;
        case 'filmoPaieska':
            include("templates/" . activeTemplate . "/pages/search-movie-page.php");
            break;
            /* Sitas nezinau kur turi nuvesti, uzkomentuoju
        case 'zanruValdymas' :
            include (...)''
            */
        default :
    }

}else {
    include("templates/" . activeTemplate . "/pages/main-page.php");
}
