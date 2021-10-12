<?php include('header.php') 
?>
<div class="container pt-4">
    <h3>Enregistrer une Annonce</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/add_annonce.php" method="post">
            <div class="mb-3">
                <label for="titre" class="form-label">Titre de l'annonce</label>
                <input type="text" class="form-control" id="titre" name="titre">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description de l'annonce</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="postal" class="form-label">Code postal et ville du bien immobilier</label>
                <input type="text" class="form-control" id="postal" name="postal">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type d'annonce (location ou vente)</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="text" class="form-control" id="prix" name="prix">
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary text-light  me-3">Enregistrer l'annonce</button>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>