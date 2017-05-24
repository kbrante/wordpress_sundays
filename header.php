<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>inte sass</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>">
</head>
<body>
    <div class="container">
        <div class="row monHeader">
            <div class="col-xs-12">
                <ul>
                    <li><a href=" <?php echo get_home_url() ?>">Catalog</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="<?php echo get_page_link(19)?>">Blog</a></li>
                    <li><a href="#">Panier</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
                </ul>
            </div>
            <div class="col-md-12 text-center">
                <h1>Sundays</h1>
                <h2>We craft ocean <br> friendly apparel</h2>
                <button>Browse our products</button>
            </div>
        </div>
