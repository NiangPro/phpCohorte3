<div class="container col-md-8 mt-3 card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                <h4>Formulaire d'<?php if(isset($c)): ?>edition<?php else: ?>ajout <?php endif; ?> Eleve</h4>
            </div>
            <div class="col-md-4 text-md-right">
                <a href="?page=apprenant" class="btn btn-primary">Retour</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
        <?php if(isset($c)): ?>
            <input type="hidden" name="id" value="<?= $c->idClasse ?>" >
            <?php endif; ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" value="<?= isset($c)? $c->prenom : ''  ?>" required  class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Nom</label>
                    <input type="text" value="<?= isset($c)? $c->nom : ''  ?>" name="nom"  required  class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Adresse</label>
                    <input type="text" name="adresse" value="<?= isset($c)? $c->adresse : ''  ?>" required  class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Tel</label>
                    <input type="tel" value="<?= isset($c)? $c->tel : ''  ?>" name="tel" minlength="9" pattern="(77|70|76|75|33|78)+[0-9]{7}" maxlength="9" required  class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Date de naissance</label>
                    <input type="date" name="datnais" value="<?= isset($c)? $c->datnais : ''  ?>" required  class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Classe</label>
                    <select name="idClasse" id="" class="form-control">
                        <option value="">Veuillez selectionner une classe</option>
                        <?php foreach($classes as $cl): ?>
                            <option value="<?= $cl->idClasse ?>"><?= ucfirst($cl->nom) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            
            <?php if(isset($c)): ?>
                <button type="submit" name="modifier" class="btn btn-outline-warning">Modifier</button>
            <?php else: ?>
                <button type="submit" name="ajouter" class="btn btn-outline-success">Ajouter</button>
            <?php endif; ?>
        </form>
    </div>
</div>