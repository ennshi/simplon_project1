<?php 
    require_once 'php/init.php';
    require_once 'php/content_comments.php';
    require_once 'php/content_date.php';

    

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    
    <title>marie et theo</title>
</head>

<body data-spy="scroll" data-target=".fixed-top" data-offset="200">
    <nav class="navbar navbar-light navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span> 
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link top-nav-link active" href="#accueil">accueil</a></li>
                    <li class="nav-item"><a class="nav-link top-nav-link" href="#chef">chef</a></li>
                    <li class="nav-item"><a class="nav-link top-nav-link" href="#menu">menu</a></li>
                    <li class="nav-item"><a class="nav-link top-nav-link" href="#commentaires">commentaires</a></li>
                    <li class="nav-item"><a class="nav-link top-nav-link" href="#contact">contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="resModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title ml-auto">R&eacute;servez une table</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="prenom" class="col-form-label">Pr&eacute;nom*</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Pr&eacute;nom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="nom" class="col-form-label">Nom</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="phone" class="col-form-label">Tel.</label>
                            </div>
                            <div class="col-8">
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="0XXXXXXXXX">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="email" class="col-form-label">Email*</label>
                            </div>
                            <div class="col-8">
                                <input type="email" class="form-control" id="mail" name="mail" placeholder="aaa@x.xx">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="adresse" class="col-form-label">Adresse</label>
                            </div>
                            <div class="col-8">
                                <textarea class="form-control" id="adresse" name="adresse" placeholder="Pays, Ville, Code, Rue..."></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-2 col-10 offset-md-3 col-md-9 justify-content-center">
                                <button type="button" class="btn btn-light" id="sbmtBtn">R&eacute;server</button>
                                <button type="button" class="btn btn-light" id="resCancelBtn" data-dismiss="modal">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="carteModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <img class="img-fluid" src="img/carte.jpg" alt="la carte">
            </div>
        </div>
    </div>

    <div id="comModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title ml-auto">Ajoutez votre commentaire</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="prenom_com" class="col-form-label">Pr&eacute;nom</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" id="prenom_com" name="prenom" placeholder="Pr&eacute;nom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="mail_com" class="col-form-label">Email</label>
                            </div>
                            <div class="col-8">
                                <input type="email" class="form-control" id="mail_com" name="mail" placeholder="aaa@x.xx">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="comment" class="col-form-label">Commentaire</label>
                            </div>
                            <div class="col-8">
                                <textarea class="form-control" id="comment" name="comment" placeholder="Votre commentaire"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-2 col-10 offset-md-3 col-md-9 justify-content-center">
                                <button type="button" class="btn btn-light" id="sendBtn">Soumettre</button>
                                <button type="button" class="btn btn-light" id="comCancelBtn" data-dismiss="modal">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <header class="jumbotron" id="accueil">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5 align-self-center">
                    <img class="img-fluid" src="img/logo.png" alt="Logo">
                </div>
                <div class="col-12 col-sm-5 ml-auto align-self-center">
                    <a class="btn btn-light" id="resBtn" href="#" role="button" data-toggle="modal" data-target="#resModal">R&eacute;servez une table</a>
                </div>
            </div>
        </div>
    </header>
    <div class="container-up">
        <div class="container">
            <div class="row content content-up">
                <div class="col-12 col-sm-5 order-12 order-sm-1">
                    <img src="img/accueil.jpg" class="d-block img-fluid content-photo" alt="Le Chef">
                </div> 
                <div class="col-12 col-sm-7 order-6" id="creperie_text">
                    <h2>Notre Cr&ecirc;perie</h2>
                     
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="chef">
        <div class="row content content-down">
            <div class="col-12 col-sm" id="chef_text">
                <h2>Le Chef</h2>
                
            </div>
            <div class="col-12 col-sm-5">
                <img src="img/chef.jpg" class="d-block img-fluid content-photo" alt="Le Chef">
            </div> 
        </div>
    </div>
    <div class="plates-container" id="menu">
        <div class="container plates-container-inner bg-white">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h2>Plats de la semaine</h2>
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <form>
                        <select class="form-control mb-4 mt-2" name="date_plats" id="date_plats">
                            
                            <?php foreach($dates as $date) {

                                $sqldate = strtotime($date->date);
                                $realdate = date( 'd-m-Y', $sqldate );

                                echo "<option value='{$date->date}'>{$realdate}</option>";
                            } ?>

                        </select>
                    </form>
                </div>
            </div>
        
            <div class="row d-flex justify-content-around" id="plats_date">
                
              
            </div>

            <div class="row justify-content-center mt-3 mt-md-5">
                <a class="btn btn-light" id="carteBtn" href="#" role="button" data-toggle="modal" data-target="#carteModal">Notre Carte</a>
            </div>
        </div>
    </div>
    <div id="commentaires"></div>
    <div class="container avis-container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                <?php $i = 0; foreach($comments as $comment) {
                    if($i == 0){
                        echo "<div class='carousel-item active'>"; 
                    } else {
                        echo "<div class='carousel-item'>";
                    } 
                    echo "<div class='card'>
                            <div class='card-body avis-body'>
                                <blockquote class='blockquote mb-0'>
                                    <p>{$comment->comment}</p>
                                    <footer class='blockquote-footer'>
                                        {$comment->prenom} 
                                        <cite title='Source Title'>{$comment->date}</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>";
                    $i++;
                }?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Dernier</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Prochain</span>
            </a>
        </div>
        <div class="row justify-content-center mb-4">
            <a class="btn btn-light" id="comBtn" href="#" role="button" data-toggle="modal" data-target="#comModal">Ajoutez votre commentaire</a>
        </div>
    </div>

    <div id="contact-container">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-12 col-sm-4 mr-auto">
                    <img src="img/logo_1.png" alt="Logo" class="img-fluid">
                </div>
                <div class="col-12 col-sm-4" id="contacts">
                    
                </div>
                <div class="col-12 col-sm ml-auto">
                    <p>du lundi &agrave; vendredi 12h-14h et 17h-20h<br/>
                    le samedi 11h-20h<br/>
                    le dimanche ferm&eacute;<p>     
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="navbar navbar-dark navbar-expand-sm col-md-8">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#accueil">CHEF</a></li>
                        <li class="nav-item"><a class="nav-link" href="#menu">MENU </a></li>
                        <li class="nav-item"><a class="nav-link" href="#commentaires">COMMENTAIRES </a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-instagram" href="http://google.com/+"><i class="fa fa-instagram fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2019 marie et th&eacute;o</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="js/scripts.js"></script>
</body>
</html>
