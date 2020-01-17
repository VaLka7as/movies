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
        case 'redaguoti' :
            include ("templates/" . activeTemplate . "/pages/edit-movie-page.php");
            break;
        case 'istrinti' :
            include ("templates/" . activeTemplate . "/pages/delete-movie-page.php");
            break;

        case 'zanruValdymas' :
            include ("templates/" . activeTemplate . "/pages/add-genre-page.php");
            break;
        default :
    }

}else {
    include("templates/" . activeTemplate . "/pages/main-page.php");
}
