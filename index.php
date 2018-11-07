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
                    <a class="creerCompte" href="#">Créer un compte</a>
                    <a class="connexion" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Se connecter</a>
<!--<button >Login</button>-->
                    
                    <a href="#">Langues</a>
                    <a href="#" class="articles fa fa-shopping-cart">  panier : <span class="qte">vide</span></a>
                </div>
            </div><!--end top navbar-->

            

        </header><!--end header -->

    </div><!--end header container-->
    
    <!--begin slider-->
      

    <div class="box-slider">
            <div class="slider-content owl-carousel owl-theme" id="s1">
                <div class="item s1_item1">
                    <div class="container slide1-upon-text">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-textSlide">
                                    <h1 class="slide1-text-top">PROINDE CONCEPTA RABI SAVOIRE,<br>QUAM DESPERADO</h1>
                                    <h4 class="slide1-text-bottom">Le Lorem Ipsum est simplement du faux texte employé</h4>
                                    <p><a href="#" class="slide1-link">En savoir plus</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                <div class="item s1_item2">
                   <div class="container slide1-upon-text">
                       <div class="row">
                           <div class="col-md-12">
                               <div class="box-textSlide">
                                   <h1 class="slide1-text-top">PROINDE CONCEPTA RABI SAVOIRE,<br>QUAM DESPERADO</h1>
                                   <h4 class="slide1-text-bottom">Le Lorem Ipsum est simplement du faux texte employé</h4>
                                   <p><a href="#" class="slide1-link">En savoir plus</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    <!--end slider-->

    <!--begin text catalogue-->
        <h2 class="text-produit">Notre catalogue</h2>
    <!--end text catalogue-->

    <div class="catalogue container-fluid" id="myCat"><!--begin catalogue-->
        <div class="owl-carousel owl-theme cat-list"></div>
        <div class="details">Les details<span class="elements"><span class="fa fa-thumbs-up">&nbsp120</span><span class="fa fa-star">&nbsp10</span></span></div>
    </div><!--end catalogue-->  
    
    <?php include("modal.php")?>
       
</body>
<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
</html>