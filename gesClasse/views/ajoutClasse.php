<div class="container col-md-6 mt-3 card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                <h4>Formulaire d'<?php if(isset($c)): ?>edition<?php else: ?>ajout <?php endif; ?> classe</h4>
            </div>
            <div class="col-md-4 text-md-right">
                <a href="?page=classe" class="btn btn-primary">Retour</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
        <?php if(isset($c)): ?>
            <input type="hidden" name="id" value="<?= $c->idClasse ?>" >
            <?php endif; ?>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="nom" value="<?= isset($c)? $c->nom : ''  ?>" required  class="form-control">
            </div>
            <div class="form-group">
                <label for="">Taille</label>
                <input type="number" value="<?= isset($c)? $c->taille : ''  ?>" name="taille" min="0" required  class="form-control">
            </div>
            <?php if(isset($c)): ?>
                <button type="submit" name="modifier" class="btn btn-outline-warning">Modifier</button>
            <?php else: ?>
                <button type="submit" name="ajouter" class="btn btn-outline-success">Ajouter</button>
            <?php endif; ?>
        </form>
    </div>
</div>