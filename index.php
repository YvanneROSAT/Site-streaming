<?php
require('./headerFooter/header.php');
//2-sql
$sql = "select * from film";

//3-Exécute une requête SQL, retourne un jeu de résultats en tant qu'objet PDOStatement
$objResult = $objConnect->query($sql);

//4-tableau contenant toutes les lignes du jeu d'enregistrements
$lesFilms = $objResult->fetchAll();
?>

<br><br><br><br><br>
<div class="container">
    <div class="row gy-5">
        <!-- je prends les donnée stackée dans la liste et je les affiches avec une boucle tout en appelant les éléments à leurs place -->
        <?php
        foreach ($lesFilms as $unFilm) :
        ?>
            <div class="col-lg-offset-3 col-lg-3">
                <div class="card" style="width: 20rem;">
                    <img src="./images/<?= $unFilm['photo']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $unFilm['idfilm'] . " " . "→" . " " . $unFilm['titre']; ?></h5>
                        <p class="card-text"><?= $unFilm['resume']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<br><br><br><br><br><br>

<div class="col-sm-6">
    <div class="card">
        <video controls="" src="Mettre le lien de videos youtube ou de celui qui ce trouve dans vos fichier" class="bs-card-video"></video>
        <div class="card-body">
            <h5 class="card-title">Bootstrap video card with controls</h5>
            <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card’s content.
            </p>
            <a href="#" class="btn btn-primary">By Sniper_code</a>
        </div>
    </div>
</div>
<?php
require('./headerFooter/footer.php');
?>