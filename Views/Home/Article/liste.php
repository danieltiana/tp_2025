<?php
include "../Views/Home/partials/header.php";
include "../Views/Home/partials/Navbar.php" ?>

<div class="main">
    <div class="container">
        <?php foreach ($articles as $as): ?>
            <div class="row mb-3">

                <div class="col-md-3 left-column order-2 mt-3">
                    <div class="h-100 p-2">

                        <ul>
                            <li> <span class="badge small bg-warning">Catégorie: blog</span></li>
                            <li><a href="">Publié par: </a></li>
                            <li><a href="">Date: 12/05/200222</a></li>
                            <li><a href="">10 commentainer</a></li>
                            <small class="btn btn-primary mt-2 mb-2 btn-sm">Commenter</small>
                            <a href="" class="btn btn-outline-primary btn-sm">Voir la publicaiton</a>
                        </ul>

                        <hr>
                    </div>
                </div>
                <div class="col-md-8 right-column order-1 ">
                    <h3 class="rounded font-bold">
                    <?=$as->Titre?>
                    </h3>
                    <?=$as->description?>
                    <div class="card-footer extrait mt-2">
                        <img src="/<?=$as->image?>" class="img-thumbnail img-small" alt="">
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
<br>
</div>



<?php
include "../Views/Home/partials/foot.php";
?>