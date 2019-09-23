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
                                <label for="prenom" class="col-form-label">Pr&eacute;nom</label>
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
                                <label for="email" class="col-form-label">Email</label>
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
                                <button type="submit" class="btn btn-light" id="sbmtBtn">R&eacute;server</button>
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
                                <label for="prenom" class="col-form-label">Pr&eacute;nom</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Pr&eacute;nom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="email" class="col-form-label">Email</label>
                            </div>
                            <div class="col-8">
                                <input type="email" class="form-control" id="mail" name="mail" placeholder="aaa@x.xx">
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
                                <button type="submit" class="btn btn-light" id="sbmtBtn">Soumettre</button>
                                <button type="button" class="btn btn-light" id="resCancelBtn" data-dismiss="modal">Annuler</button>
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
                <div class="col-12 col-sm-7 order-6">
                    <h2>Notre Cr&ecirc;perie</h2>
                    <p>Depuis janvier 2012, Marie et Théo Leroy les propriétaires de la crêperie, où vous régale de des nombreuses préparations maisons. 
                        Outre les pâtes à crêpes et galettes préparées chaque jour, vous pourrez apprécier la sauce chocolat, le caramel beurre salé, la crème de marron, 
                        les confitures, la confiture cheveux d'ange, les tomates séchées marinées, les petites salades et leur vinaigrette au miel et au vinaigre de 
                        cidre maison, les madeleines de sarrasin, le thé glacé, les crèmes de fruits pour les kirs, les chutneys et autres préparations du jour.</p>
                    <p class="d-none d-sm-block">Les cidres viennent de deux petits producteurs indépendants. Le miel provient d'un apiculteur de Seine et Marne et 
                        les légumes d'un petit primeur indépendant.
                        Chez 'marie et théo', pas de micro ondes, pas de congélateur ni de boîtes de conserve. 
                        Du frais, du fait maison, le tout servi avec beaucoup d'amour et de sourires.</p> 
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="chef">
        <div class="row content content-down">
            <div class="col-12 col-sm">
                <h2>Le Chef</h2>
                <p>Théo Leroy est maître crêpier français, formé en Bretagne. Il s`attache à préparer des plats toujours plus originaux. 
                    Chaque semaine, il vous proposons un nouveaux plqt que vous pourrez découvrir sur ce site! Et bien sûr, vous pouvez choisir nos recettes traditionnelles, toujours très demandées. 
                    Pour en savoir plus sur les plats, consultez les plats à la carte et les menus de la crêperie.</p>
                <p class="d-none d-sm-block">Côté recettes, Théо n’a pas fini de vous surprendre avec des propositions qui se renouvellent régulièrement.  
                    Vous n’imaginerez pas jusqu’à quel point la crêpe et la galette peuvent se décliner… Complète pour les puristes, garnie de poêlée de Saint-Jacques sauce
                    cognac aux amandes pour les palais les plus fins, de la crêpe la plus traditionnelle à la plus exotique ou raffinée, il y en a pour tous les goûts et 
                    toutes les envies !</p> 
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

                <div class="col-12 d-flex justify-content-end">
                    <h3>jj/mm/yyyy</h3>
                </div>
            </div>
        
            <div class="row d-flex justify-content-around">
                <div class="col-10 col-md-6 col-lg-3">
                    <div class="card card-flip">
                        <div class="card-front">
                            <img class="card-img" src="img/salade_2.jpg" alt="Card image cap">
                        </div>
                        <div class="card-back">
                            <div class="card-body">
                                <h4 class="card-title">Salade poulet avocat</h4>
                                <p class="card-text">(poulet, avocat, oignon, salade mixte)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-md-6 col-lg-3">
                    <div class="card card-flip">
                        <div class="card-front">
                            <img class="card-img" src="img/galette_1.jpg" alt="Galette aux courgettes">
                        </div>
                        <div class="card-back">
                            <div class="card-body">
                                <h4 class="card-title">Galette aux courgettes</h4>
                                <p class="card-text">(galette de sarrasin, courgette, oeuf, emmental)</p>
                            </div>
                        </div>
                    </div>
                    <span class="badge badge-success mt-1"><i class="fa fa-leaf fa-2x"></i></span>
                </div>
                <div class="col-10 col-md-6 col-lg-3">
                    <div class="card card-flip">
                        <div class="card-front">
                            <img class="card-img" src="img/crepe_1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-back">
                            <div class="card-body">
                                <h4 class="card-title">Cr&ecirc;pe &aacute; la banane flamb&eacute;e</h4>
                                <p class="card-text">(cr&ecirc;pe, banane, sucre, orange, rhum)</p>
                            </div>
                        </div>
                    </div>
                    <span class="badge badge-success mt-1"><i class="fa fa-leaf fa-2x"></i></span>
                </div>
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
                <div class="carousel-item active">
                    <div class="card">
                        <div class="card-body avis-body">
                            <blockquote class="blockquote mb-0">
                            <p>En étant bretons, nous avons trouvé cette crêperie très très bonne! Bon accueil, ambiance chaleureuse! Le service est rapide : 
                                convient parfaitement pour les personnes ayant peu de temps le midi! 
                                D’autant plus qu’il y a un menu du midi avec une bolée de cidre, une galette et une crêpe à seulement 12€ : c’est très valable!</p>
                            <footer class="blockquote-footer">Simon et Elodie <cite title="Source Title">25/09/2019</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-body avis-body">
                            <blockquote class="blockquote mb-0">
                            <p>Les galettes et crêpes sont gourmandes et bien assaisonnées. Même nature, elles ont très bon goût. 
                                Le rapport qualité prix est raisonnable et le service au top. A refaire sans hésiter !!</p>
                            <footer class="blockquote-footer">Aurelia <cite title="Source Title">19/06/2019</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-body avis-body">
                            <blockquote class="blockquote mb-0">
                            <p>Cette crêperie est excellente vous pouvez vous y rendre les yeux fermés.
                                Pensez à réserver les places y sont chères contrairement à l’addition.</p>
                            <footer class="blockquote-footer">Michel <cite title="Source Title">10/04/2019</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
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
                <div class="col-12 col-sm-4">
                    <p>151 Place Royale<br/>
                    64000 Pau<br/>
                    Tel. : +33 0 00 00 00 00<br/>
                    info@marieettheo.fr</p>
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
                        <li class="nav-item"><a class="nav-link" href="#" role="button" data-toggle="modal" data-target="#resModal">RESERVER UNE TABLE</a></li>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
