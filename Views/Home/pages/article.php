<?php
include "../Views/Home/partials/header.php";
include "../Views/Home/partials/Navbar.php" ?>

<section>
    <main class="col-md-9 ml-sm-auto col-lg-9 main px-md-4">
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2 class="">Notre articles</h2>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle mx-2">
                        <span data-feather="calendar"></span>
                        Le plus récents
                    </button>
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Enregistrer</button>
                    </div>
                </div>
            </div>

            <?php include "../Views/Home/Article/recomended.php";
            include "../Views/Home/Article/liste.php";
            ?>

            <nav class="breadcrumb mt-5">
                <a class="breadcrumb-item btn btn-warning" href="#">1</a>
                <a class="breadcrumb-item btn ms-2 btn-outline-warning" href="#">2</a>
                <span class="breadcrumb-item btn ms-2 btn-outline-warning" aria-current="page">3</span>
                <a href="" class="breadcrumb-item ms-2 btn btn-primary">Next</a>
                <a href="" class="breadcrumb-item ms-2 btn btn-primary">Prev</a>
            </nav>



            <?php include "../Views/Home/partials/footer.php"; ?>
        </div>

    </main>
    <sidebar>
        <?php include "../Views/Home/Article/sidebar.php" ?>
    </sidebar>
</section>
<?php

include "../Views/Home/partials/foot.php" ?>