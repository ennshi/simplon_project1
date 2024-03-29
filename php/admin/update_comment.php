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
            'email' => array(
                'name' => 'L\'adresse email',
                'required' => true,
                'email_filter' => true
            ),
            'comment' => array(
                'name' =>'Le commentaire',
                'required' => true,
                'min' => 2,
                'max' => 300
            ),
            'accepte' => array(
                'name' =>'Le status',
                'boolean' => true
            )
        ));
        if($validation->passed()) {
            $user = new User();

            $id = $_POST['id'];
            $prenom = htmlentities(trim($_POST['prenom']));
            $email = htmlentities(trim($_POST['email']));
            $comment = htmlentities(trim($_POST['comment']));
            $accepte = htmlentities($_POST['accepte']);
            
            $user->modifier('comments', $id, array(
                'prenom' => $prenom,
                'email' => $email,
                'comment' => $comment,
                'accepte' => $accepte,
            ));

            $msg = "Le record id={$id} est changé!";

        } else {
            $msg = implode(' ', $validation->errors());
        }

        echo $msg;
    }