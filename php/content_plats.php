<?php
    require_once 'init.php';
    
    $plat = new Content();
    $plat->select('plats', 'date', $_POST['date_plats']);
    $plats = $plat->show();
    $result = "";

    foreach($plats as $plat) {
        $result .= "<div class='col-10 col-md-6 col-lg-3'>
                    <div class='card card-flip'>
                        <div class='card-front'>
                            <img class='card-img' src='../crepes/img/plats/{$plat->id}.jpg' alt='{$plat->nom}'>
                        </div>
                        <div class='card-back'>
                            <div class='card-body'>
                                <h4 class='card-title'>{$plat->nom}</h4>
                                <p class='card-text'>({$plat->ingredients})</p>
                            </div>
                        </div>
                    </div> ";

        if($plat->vegan == 1) {
            $result .= "<span class='badge badge-success mt-1 mr-1'><i class='fa fa-leaf fa-2x'></i></span>";
        }
        if($plat->spicy == 1) {
            $result .= "<span class='badge badge-danger mt-1'><i class='fa fa-fire fa-2x'></i></span>";
        }

        $result .= "</div>";
    }
    
    echo $result;
        