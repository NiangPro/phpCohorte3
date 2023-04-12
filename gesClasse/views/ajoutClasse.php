<div class="container col-md-6 mt-3 card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                <h4>Formulaire d'ajout classe</h4>
            </div>
            <div class="col-md-4 text-md-right">
                <a href="?page=classe" class="btn btn-primary">Retour</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="nom" required  class="form-control">
            </div>
            <div class="form-group">
                <label for="">Taille</label>
                <input type="number" name="taille" min="0" required  class="form-control">
            </div>
            <button type="submit" name="ajouter" class="btn btn-outline-success">Ajouter</button>
        </form>
    </div>
</div>