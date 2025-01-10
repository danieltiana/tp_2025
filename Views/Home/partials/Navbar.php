<nav
    class="navbar navbar-expand-sm navbar-dark bg-dark"
>
    <div class="container">
        <a class="navbar-brand text-primary" href="/">Be-flixBlog</a>
        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/" aria-current="page"
                        >Accueil
                        <span class="visually-hidden">(current)</span></a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/articles">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/articles"></a>
                </li>
                <li class="nav-item dropdown bg-dark">
                    <a
                        class="nav-link dropdown-toggle bg-dark"
                        href="#"
                        id="dropdownId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Nos produits</a
                    >
                    <div
                        class="dropdown-menu bg-dark"
                        aria-labelledby="dropdownId"
                    >
                        <a class="dropdown-item text-light" href="/article"
                            >Films</a
                        >
                        <a class="dropdown-item text-light" href="article"
                            >Jeux</a
                        >
                        <a class="dropdown-item text-light" href="article"
                            >Accessoires</a
                        >
                    </div>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0" action="" method="get">
                <input
                    name = "article"
                    class="form-control me-sm-2 bg-dark text-light"
                    type="text"
                    placeholder="Rechercher un article"
                />
                <button
                    class="btn btn-primary my-2 my-sm-0"
                    type="submit"
                >
                Rechercher
                </button>
            </form>
        </div>
    </div>
</nav>
 
