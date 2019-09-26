<?php 
    require_once '../init.php';

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
            ),
            'done' => array(
                'name' =>'Le status',
                'boolean' => true
            ),
        ));
        if($validation->passed()) {
            $user = new User();

            $id = $_POST['id'];
            $prenom = htmlentities(trim($_POST['prenom']));
            $nom = htmlentities(trim($_POST['nom']));
            $email = htmlentities(trim($_POST['email']));
            $phone = htmlentities($_POST['phone']);
            $adresse = htmlentities(trim($_POST['adresse']));
            $done = htmlentities($_POST['done']);
            
            $user->modifier('users', $id, array(
                'prenom' => $prenom,
                'nom' => $nom,
                'email' => $email,
                'phone' => $phone,
                'adresse' => $adresse,
                'done' => $done,
            ));

            $msg = "Le record id={$id} est changé!";

        } else {
            $msg = implode(' ', $validation->errors());
        }

        echo $msg;
    }