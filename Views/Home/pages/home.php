<?php
include "../Views/Home/partials/header.php";
?>
<section>
    <?php   include "../Views/Home/partials/Navbar.php" ?>
    <div class="sidebar">

    </div>
    <div class="main">
        <?php include "../Views/Home/Banniere/carousel.php"; ?>
        <div class="container">
            <?php
            include "../Views/Home/Article/recomended.php";
            include "../Views/Home/Article/Extrait.php";
            ?>
            <div class="row">
            <?php include "../Views/Home/Contact.php"?>
            </div>
            <div class="row">
                <?php
                include "../Views/Home/partials/footer.php";
                ?>
            </div>

        </div>
    </div>

</section>
<?php

include "../Views/Home/partials/foot.php";
?>