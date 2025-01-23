<?php
include "../Views/Home/partials/header.php";
include "../Views/Admin/partials/sidebar.php" ?>


<div class="main">
    <div class="admin-elements">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-8"><h2>Liste</h2></div>
                <div class="col-md-3 mt-2"><a href="/admin/nouveau" class="btn btn-primary">Nouveau</a></div>
            </div>
            <div class="row">
                <div
                    class=" w-100 col-12 ">
                    <table
                        class="table table-striped table-hover table-borderless table-warning p-5">
                        <thead class="table-dark">
                            <caption>
                                List des articles
                            </caption>
                            <tr>
                                <th>id</th>
                                <th>Titre</th>
                                <th>description</th>
                                <th>Action</th>
                                <th>images</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach($articles as $liste):?>
                            <tr
                                class="table-dark">
                                <td scope="row"><?=$liste->id?></td>
                                <td><?=$liste->Titre?></td>
                                <td><?=$liste->description?></td>
                                <td>
                                    <?php if(!empty($liste->image)):?>
                                        <img src="/<?=$liste->image?>" style="width:100px;object-fit: cover;height:100px" class=" rounded-circle" alt="">
                                    <?php else: echo "aucune image";endif;?>
                                </td>
                                <td>
                                    <Button class="btn btn-primary">Modifier</Button>
                                    <Button class="btn btn-danger">Supprimer</Button>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>