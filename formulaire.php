<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaires</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
    <div class="container col-md-5 mt-5">
        <div class="card  p-3">
            <div class="card-header bg-warning ">
               <h2>Formulaire d'ajout personne</h2> 
            </div>
            <div class="card-body">
                <form action="traitement.php" method="POST">
                    <div class="form-group">
                        <label for="">Prenom</label> <br>
                        <input type="text" name="prenom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nom</label> <br>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tel</label> <br>
                        <input type="tel" name="tel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Sexe</label> <br>
                        M<input value="Masculin" type="radio" name="sexe" >&nbsp;&nbsp; F<input value="Feminin" type="radio" name="sexe" checked>
                    </div>
                    <div class="form-group">
                        <label for="">Pays</label> <br>
                        <select name="pays" id="" class="form-control">
                            <option value="">Veuillez selectionner un pays</option>
                            <option value="senegal">Senegal</option>
                            <option value="mali">Mali</option>
                            <option value="algerie">Algerie</option>
                            <option value="gabon">Gabon</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="valider">Ajouter</button>
                        <button type="reset" class="btn btn-danger">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="container card col-md-5">
        <div class="card-header bg-warning">
            <h3 class="text-center">Formulaire d'ajout</h3>
        </div>
        <div class="card-body">
            <form action="traitement.php" method="POST">
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="tel" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Sexe</label><br>
                    <label for="" class="radio-inline">M <input type="radio" value="Masculin" name="sexe"></label>
                    <label for="" class="radio-inline">F <input type="radio" value="Feminin" name="sexe"></label>
                </div>
                <div class="form-group">
                    <select name="pays" id="" class="form-control">
                        <label for="">Pays</label>
                        <option value="">Selectionner un pays</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Mali">Mali</option>
                        <option value="Gambie">Gambie</option>
                    </select>
                </div>
                <button type="submit" id="add" name="ajouter" class="btn btn-success">Ajouter</button>
                <button type="reset" name="annuler" class="btn btn-danger">Annuler</button>
            </form>
        </div>

    </div> -->

    <script src="assets/jquery.js"></script>
    <script src="assets/bootstrap.min.js"></script>

    <script>
        let prenom = document.getElementById("prenom");
        let ajout = document.getElementById("add");

        // ajout.addEventListener("click", (e)=>{
        //     alert(prenom.value)
        //     e.preventDefault();
        // })
    </script>
</body>
</html>