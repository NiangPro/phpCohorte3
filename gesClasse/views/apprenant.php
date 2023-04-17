
<div class="card">
    <div class="card-header bg-info">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-warning">Liste des apprenants</h1>
            </div>
            <div class="col-md-4 text-md-right">
                <a href="?page=apprenant&type=add" class="btn btn-success">Ajouter</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Tel</th>
                    <th>Adresse</th>
                    <th>Classe</th>
                    <th>Date de naissance</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($eleves as $e): ?>
                    <tr>
                        <td><?= $e->prenom ?></td>
                        <td><?= $e->nom ?></td>
                        <td><?= $e->tel ?></td>
                        <td><?= $e->adresse ?></td>
                        <td><?= $e->nomclasse ?></td>
                        <td><?= date("d/m/Y", strtotime($e->datnais))  ?></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

