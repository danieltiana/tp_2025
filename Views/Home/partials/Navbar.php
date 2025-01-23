<nav class="navbar navbar-expand-md navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand text-warning" href="#">My blog</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/" aria-current="page">Accueil
                        <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/articles">articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/articles">A propos</a>
                </li>

            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input
                    class="form-control me-sm-2 bg-transparent border-bottom text-secondary border-secondary border-none"
                    type="text" placeholder="identifiant" />
                <input
                    class="form-control me-sm-2 bg-transparent border-bottom text-secondary border-secondary border-none"
                    type="text" placeholder="mot de passe" />
                <a href="/admin" class="btn btn-outline-warning my-2 btn-sm my-sm-0" type="submit">
                    Connexion
                </a>
            </form>
        </div>
    </div>
</nav>