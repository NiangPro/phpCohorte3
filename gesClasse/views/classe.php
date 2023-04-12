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
                        <td></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
