<?php
    require_once 'php/init.php';
    if(count($_POST)>0){
        if($_POST['password'] == "DAYAADMIN"){
            $_SESSION['password'] = $_POST['password'];
            header("Location: admin.php");
        }
    }


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

    <style>
        .btn-light {
            width: 100px;
            margin-bottom: 10px;
        }
    </style>
    <title>Admin?</title>
</head>
<body>
    <div class="container d-flex justify-content-center"> 
        <form method="post">
            <div class="form-group row">
                <div class="col-12 col-form-label mt-5 d-flex justify-content-center">
                    <label for="password" class="col-form-label"><h4>Mot de passe</h4></label>
                </div>
                <div class="col-12">
                    <input type="password" class="form-control" id="password" name="password" placeholder="">
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn" id="sendBtn">Soumettre</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>