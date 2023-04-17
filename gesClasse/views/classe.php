<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                <h1>Liste des classes</h1>
            </div>
            <div class="col-md-4 text-md-right">
                <a href="?page=classe&type=add" class="btn btn-success">Ajouter</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Taille</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($classes as $c): ?>
                    <tr>
                        <td><?= $c->nom ?></td>
                        <td><?= $c->taille ?></td>
                        <td>
                            <a href="?page=classe&type=edit&id=<?= $c->idClasse ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                            <i class="fa fa-trash"></i>
                </button>
                        </td>

                            <!-- Modal -->
                            <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Êtes-vous sûr de vouloir supprimer
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <a href="?page=classe&delete=<?= $c->idClasse ?>" class="btn btn-danger">Supprimer</a>
                                </div>
                                </div>
                            </div>
                            </div>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

