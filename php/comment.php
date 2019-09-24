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
            'email' => array(
                'name' => 'L\'adresse email',
                'required' => true,
                'email_filter' => true
            ),
            'comment' => array(
                'name' =>'Le commentaire',
                'required' => true,
                'min' => 2,
                'max' => 120
            )
        ));
        if($validation->passed()) {
            $user = new User();

            $prenom = htmlentities(trim($_POST['prenom']));
            $email = htmlentities(trim($_POST['email']));
            $comment = htmlentities(trim($_POST['comment']));
            
            $user -> ajouter('comments', array(
                'prenom' => $prenom,
                'email' => $email,
                'comment' => $comment,
                'date' => date('Y-m-d H:i:s'),
                'accepte' => 0
            ));

            $msg = "Merci, {$prenom}, pour votre commentaire!";

        } else {
            $msg = implode(' ', $validation->errors());
        }

        echo $msg;
    }