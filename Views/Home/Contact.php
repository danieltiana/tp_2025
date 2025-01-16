<?php
include "../Views/Home/partials/header.php";
?>
<div class="container">
    <div class="row">
        <div class="title">
            <h2>Contactez-nous</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-floating mb-3 ">
                <input type="text" class="form-control bg-dark border-0" name="email" id="email" placeholder="" />
                <label for="email" class="">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control bg-dark border-0" name="sujet" id="sujet" placeholder="" />
                <label for="formId1">Sujet</label>
            </div>
            <div class="form-floating mb-3">
                <textarea name="" rows="5" class="bg-dark border-0" placeholder="Votre nessage"
                    style="width: 100%;"></textarea>
            </div>
            <div class="form-floating">
                <button class="btn btn-warning">Envoyer</button>
            </div>
        </div>
        <div class="col-md-6">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias molestiae, libero expedita ipsum esse
                placeat? Ex id eveniet fugit consequatur, cum vero mollitia ad dolorem pariatur quo, illum ratione
                dolor!</p>
        </div>
    </div>



</div>
<?php
include "../Views/Home/partials/foot.php";
?>