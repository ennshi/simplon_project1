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
    <div id="comChangeModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title ml-auto">Changer le commentaire id=<span id="numero"></span></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="prenom_com" class="col-form-label">Pr&eacute;nom</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" id="prenom_com" name="prenom" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="mail_com" class="col-form-label">Email</label>
                            </div>
                            <div class="col-8">
                                <input type="email" class="form-control" id="mail_com" name="mail" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="comment" class="col-form-label">Commentaire</label>
                            </div>
                            <div class="col-8">
                                <textarea class="form-control" id="comment" name="comment" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 col-md-3 col-form-label ml-auto">
                                <label for="accepte" class="col-form-label">Accepté(0-non/1-oui)</label>
                            </div>
                            <div class="col-8">
                                <input type="email" class="form-control" id="accepte" name="accepte" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-2 col-10 offset-md-3 col-md-9 justify-content-center">
                                <button type="button" class="btn btn-light" id="soumettreBtn">Soumettre</button>
                                <button type="button" class="btn btn-light" id="cancelBtn" data-dismiss="modal">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                        $resid = $res->id;
                        $resprenom = $res->prenom;
                        $resnom = $res->nom;
                        $resemail = $res->email;
                        $resphone = $res->phone;
                        $resadresse = $res->adresse;
                        $resdate = $res->date;
                        $resdone = $res->done;
                        echo "<tr>
                                <th scope='row'>$i</th>
                                <td>{$resid}</td>
                                <td>{$resprenom}</td>
                                <td>{$resnom}</td>
                                <td>{$resemail}</td>
                                <td>{$resphone}</td>
                                <td>{$resadresse}</td>
                                <td>{$resdate}</td>
                                <td>{$resdone}</td>
                                <td><input type='button' class='btn btn-light' onclick='openUpdate({$resid}, \"{$resprenom}\", \"{$resnom}\", \"{$resemail}\", \"{$resphone}\", \"{$resadresse}\", \"{$resdate}\", \"{$resdone}\")' value='Modifier'> 
                                <input type='button' class='btn btn-light' onclick='supprimerData(\"users\", {$resid})' value='Supprimer'></td>
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
                                <td><input type='button' class='btn btn-light' onclick='commentUpdate(\"comments\", {$id}, \"{$prenom}\", \"{$email}\", \"{$commentaire}\", \"{$accepte}\")' value='Modifier'> 
                                <input type='button' class='btn btn-light' onclick='supprimerData(\"comments\", {$id})' value='Supprimer'></td>
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
    
    <script>
    
        function supprimerData(table, id) {
            let msg = confirm("Voulez-vous supprimer le record id=" + id +"?");
            if(msg) {
                const dataToUse = {
                    'table' : table,
                    'id' : id,
                };
                $.ajax({  
                    type: 'POST',  
                    url: 'php/admin/supprimer.php', 
                    data: dataToUse,
                })
                .done((data) => {
                    alert(data);
                    window.location.reload();
                });
            }
        }

        function commentUpdate(table, id, prenom, email, commentaire, accepte) {
            let num = id;
            let tableName = table;

            $('#numero').html(id);
            $('#prenom_com').val(prenom);
            $('#mail_com').val(email);
            $('#comment').val(commentaire);
            $('#accepte').val(accepte);

            $('#comChangeModal').modal('show');

            $('#soumettreBtn').click(function(){
        		let msg = confirm("Voulez-vous modifier le record id=" + num + "?");
        		if(msg) {
        			let formData = {
                            'table' : tableName,
        	    			'id' : num,
        		            'prenom' : $('#prenom_com').val(),
        		            'mail' : $('#mail_com').val(),
        		            'comment' : $('#comment').val(),
        		            'accepte' : $('#accepte').val(),
        		        };
        			$.ajax({  
        			    type: 'POST',  
        			    url: 'php/admin/update_comment.php', 
        			    data: formData
        			    
        			})
        			.done(function(data){
        				alert(data);
        				window.location.reload();
        			});
        		}
    		});
            
        }
    
    
    </script>
</body>
</html>
