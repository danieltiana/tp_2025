<?php
include "../Views/Home/partials/header.php";
?>

<div class="main">
    <div class="container">
        <div class="row">
            <a href="/admin/article" class="btn btn-primary mt-2 mb-3">Retour</a>
        </div>
        <div class="row">
            <h2>Ajout noveau article</h2>
        </div>
        <form action="/admin/article/save" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Titre" name="titre">
                </div>
                <div class="col-md-6">
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <div class="row mt-3 p-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Description</h2>
                    </div>
                    <div class="card-body">
                        <textarea name="description" style="width:100%" rows="5"></textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="create" class="btn btn-warning form-control">Envoyer</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>