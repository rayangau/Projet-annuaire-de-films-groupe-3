<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annuaire de films - <?=$page?></title>
    <link rel="stylesheet" href="../Css/styleFilm.css">
</head>
<body>
    <div class="imgdessus"></div>
    <h1>
        <?=$film['titre']?>
    </h1>
    <div class="divCentrer">
        <img src="<?='../Css/image/'.$film['image']?>">
        <article>
            <h3>
                <div class='titre'>Date De Sortie :</div><?=$film['date_de_sortie']?>
            </h3>
            <h3>
                <div class='titre'> Genre :</div>
                <?php foreach ($genres as $genre){
                    echo $genre['genre'].' ';
                }?>
            </h3>
            <h3>
                <div class='titre'>Nationalité :</div><?=$nationalite['nationalite']?>
            </h3>
            <h3>
                <div class='titre'>Réalisateur :</div>
                <?php foreach ($realisateurs as $realisateur){
                    echo $realisateur['realisateur'].' ';
                }?>
            </h3>
            <h3>
                <div class='titre'>Acteurs :</div>
                  <?php foreach ($acteurs as $acteur){
                            echo $acteur['acteur'].' '.'<br>';
                }?>
            </h3>
        </article>
    </div>
    <p>
        <?=$film['description']?>
    </p>
    <div class="imgdessous"></div>

</body>
</html>
