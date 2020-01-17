<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link type="text/css" rel="stylesheet" href="templates/<?=activeTemplate;?>/css/bootstrap.css">
    <script type="text/javascript" src="templates/<?=activeTemplate;?>/js/jquery.slim.js"></script>
    <script type="text/javascript" src="templates/<?=activeTemplate;?>/js/bootstrap.min.js"></script>
    <link href="templates/<?=activeTemplate;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="templates/<?=activeTemplate;?>/css/style.css" rel="stylesheet">
    <title><?=$siteName;?></title>
</head>
<body>
<header>
    <h1 style="text-align: center">Filmu paieskos aplikacija</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="nav nav-tabs" id="wrapper">
            <div class="nav-item" id="sidebar-wrapper">
                <div class="sidebar-heading"><?=$siteName;?></div>
                <div class="pos-f-t">
                    <?php foreach($navigation['primary'] as $href => $title):?>
                        <a href="?page=<?=$href;?>" class="list-group-item list-group-item-action bg-light"><?=$title;?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">


                    <?php foreach($navigation['actions'] as $href => $title):?>

                        <li class="nav-item active"><a class="nav-link" href="?page=<?=$href;?>"> <?=$title;?> <span class="sr-only">(current)</span></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
    </nav>
</header>
<section class="about-project">
    <h2>Apie projekta</h2>
    <p>Trumpai apie projekta</p>
</section>
    <h2 class="dropdown-header" style="text-align: center;">Naujausi filmai</h2>
<?php require ($_SERVER['DOCUMENT_ROOT'].'/movies-master/router.php')?>
<footer class="card-footer text-muted">
    <p>Sukurta: Deividas Juskauskas</p>
</footer>
</body>
</html>
