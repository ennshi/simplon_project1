<?php
    require_once 'init.php';

    $msg = '';

    if(count($_POST)>0) {
        $validate = new Validation();
        $validation = $validate->check($_POST, array(
            'prenom' => array(
                'name' => 'Le prenom',
                'required' => true,
                'letters' =>true,
                'min' => 2,
                'max' => 50
            ),
            'nom' => array(
                'name' => 'Le nom',
                'letters' =>true,
                'min' => 2,
                'max' => 50
            ),
            'email' => array(
                'name' => 'L\'adresse email',
                'required' => true,
                'email_filter' => true
            ),
            'phone' => array(
                'name' =>'Le numero',
                'numtel' => true
            ),
            'adresse' => array(
                'name' =>'L\'adresse',
                'min' => 5,
                'max' => 120
            )
        ));
        if($validation->passed()) {
            $user = new User();

            $prenom = htmlentities(trim($_POST['prenom']));
            $nom = htmlentities(trim($_POST['nom']));
            $email = htmlentities(trim($_POST['email']));
            $phone = htmlentities($_POST['phone']);
            $adresse = htmlentities(trim($_POST['adresse']));
            
            $user -> ajouter('users', array(
                'prenom' => $prenom,
                'nom' => $nom,
                'email' => $email,
                'phone' => $phone,
                'adresse' => $adresse,
                'date' => date('Y-m-d H:i:s')
            ));

            $msg = "Merci, {$prenom}. Nous allons vous contacter!";

        } else {
            $msg = implode($validation->errors());
        }

        echo $msg;
    }