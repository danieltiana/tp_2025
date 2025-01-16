<?php
include "../Views/Home/partials/header.php";
?>
<section>
    <div class="main">
        <?php include "../Views/Home/partials/Navbar.php" ?>
        <div class="container">
            <div class="row mt-2 mb-2">
                <button class="btn btn-outline-warning btn-small">
                    Retour
                </button>
            </div>
            <div class="row">
                <div class="card bg-transparent">
                    <div class="card-header ">
                        <h2>Titre de l'article</h2>
                    </div>
                    <div class="card-img">

                    </div>
                    <div class="card-description p-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta quisquam reprehenderit nulla
                        expedita exercitationem sapiente deleniti tenetur, quibusdam cum sed at dignissimos, assumenda
                        modi fugit, corrupti debitis voluptate ex ipsam.
                    </div>
                    <div class="card-footer text-secondary">
                        <p> 12/02/16</p>
                        <hr>
                        <p>Commentaires</p>
                        <ul>
                            <li>commentairer1</li>
                            <li>commentairer2</li>
                            <li>commentairer3</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">
                <?php include "../Views/Home/Article/recomended.php"; ?>
            </div>
        </div>
    </div>

</section>
<?php

include "../Views/Home/partials/foot.php";
?>