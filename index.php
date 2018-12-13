<?php
if(isset($_GET['page']) && !empty($_GET['page'])) {              //Si on a une info dans $_GET['page'], c'est la page demandée
    $page = $_GET['page'];
}
else {
    $page = 'Home';                                              //Si il n'y a rien dans $_GET['page'], on va sur la home
}

$page = ucfirst($page);                                          //On passe la première lettre en majuscule car les controlleurs s'appellent FilmController.php et HomeController.php mais les URLs sont en général en minuscule

include('Controllers/'.$page.'Controller.php');                  //On inclut le controller en fonction de la page demandée
?>
