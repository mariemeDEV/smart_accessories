<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<!-- <div class="container-fluid"> -->
    <div class="container-fluid header-contain"><!--begin header container-->
        <header class="container"><!--begin header-->
            <div class="row justify-content-end navbar"><!--begin top navbar-->
                <div class="menu-top-content">
                    <a><img class="logo" src="#" alt="logo"></a>
                    <a href="index.php">Home</a>
                    <a href="#">Qui sommes-nous ?</a>
                    <a href="#"><span id="catLink">Notre catalogue</span></a>
                    <a href="#">Créer un compte</a>
                    <a href="#">Se connecter</a>
                    <a href="#">Langues</a>
                    <a href="#" class="articles fa fa-shopping-cart">  panier : <span class="qte">vide</span></a>
                </div>
            </div><!--end top navbar-->
        </header><!--end header -->
    </div><!--end header container-->  
    
    <div class="container-fluid">
        <div class="row article-details">
            <div class="a1"></div>
            <div class="a2">
                <p class="prix">Prix : 250.000FCFA</p>
                <p style="color:gray;font-size:15px;line-height:5px">Prix conditions</p>
                <p style="color:gray;font-size:15px;line-height:5px">Prix conditions</p>
                <hr>
                <p class="descProd">Description :</p>
                <p>Le produit es de qualitéet es livré gratuitement.Le produit es de qualitéet es livré gratuitement.</p>
                <hr>
                <div class="qteProd">
                    <p><span class="fa fa-check check"></span><span class="modalite">Domicile.</span><span class="m">Offert</span></p>
                    <p><span class="fa fa-check check"></span><span class="modalite">Bureau</span><span class="m m2">Offert</span></p>
                    <p><span class="fa fa-check check"></span><span class="modalite">Autre</span><span class="m m3">Offert</span></p>
                    <div class="container quantite">
                        <span class="qte">Quantité</span>
                        <span class="spinner"><span class="fa fa-minus-circle btn moins" id="ajouter"></span><span id="qteChoisie">25</span><span class="fa fa-plus-circle btn plus" id="diminuer"></span></span>
                        <span class="ajouterPanier btn btn-success btn-xs">Au panier</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="width:400px;background:red"></div>
</body>
</html>