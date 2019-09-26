<?php 
    require_once 'php/init.php';
    require_once 'php/admin_table_content.php';
    

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
    
    <title>Admin marie et theo</title>
</head>
<body>
    <header class = "container">
        <div class="row col-12 justify-content-center mb-5">
            <h2>Bonjour, Admin!</h2>
        </div>
    <header>
    <div class = "container">
        <table class="table">
            <thead>
                <tr>
                    <th colspan=8><h4>Réservations</h4></th> 
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tel</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Date</th>
                    <th scope="col">Contacté</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $i = 1;
                    foreach($reservations as $res) {
                        echo "<tr>
                                <th scope='row'>$i</th>
                                <td>{$res->id}</td>
                                <td>{$res->prenom}</td>
                                <td>{$res->nom}</td>
                                <td>{$res->email}</td>
                                <td>{$res->phone}</td>
                                <td>{$res->adresse}</td>
                                <td>{$res->date}</td>
                                <td>{$res->done}</td>
                                <td></td>
                            </tr>";
                        $i++;
                    }
                ?>
                
            </tbody>
        </table>
    </div>

    <div class = "container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th colspan=8><h4>Commentaires</h4></th> 
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Commentaire</th>
                    <th scope="col">Date</th>
                    <th scope="col">Accepté</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $i = 1;
                    foreach($comments as $comment) {
                                $id = $comment->id;
                                $prenom = $comment->prenom;
                                $email = $comment->email;
                                $commentaire = $comment->comment;
                                $date = $comment->date;
                                $accepte = $comment->accepte;
                        echo "<tr>
                                <th scope='row'>$i</th>
                                <td>{$id}</td>
                                <td>{$prenom}</td>
                                <td>{$email}</td>
                                <td>{$commentaire}</td>
                                <td>{$date}</td>
                                <td>{$accepte}</td>
                                <td><input type='button' class='btn btn-light' onclick='openUpdate({$id}, \"{$prenom}\", \"{$email}\", \"{$commentaire}\", \"{$date}\", \"{$accepte}\")' value='Modifier'> 
                                <input type='button' class='btn btn-light' onclick='checkDelete({$id})' value='Supprimer'></td>
                            </tr>";
                        $i++;
                    }
                ?>
                
            </tbody>
        </table>
    </div>

    <div class = "container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th colspan=8><h4>Plats</h4></th> 
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Ingredients</th>
                    <th scope="col">Date</th>
                    <th scope="col">Epicé</th>
                    <th scope="col">Vegan</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $i = 1;
                    foreach($plats as $plat) {
                        echo "<tr>
                                <th scope='row'>$i</th>
                                <td>{$plat->id}</td>
                                <td>{$plat->nom}</td>
                                <td>{$plat->ingredients}</td>
                                <td>{$plat->date}</td>
                                <td>{$plat->spicy}</td>
                                <td>{$plat->vegan}</td>
                                <td></td>
                            </tr>";
                        $i++;
                    }
                ?>
                
            </tbody>
        </table>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="js/admin_scripts.js"></script>
</body>
</html>
