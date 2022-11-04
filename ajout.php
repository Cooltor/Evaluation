<!-- PARTIE TRAITEMENT -->


<?php


require_once './inc/header.inc.php'; 


$err = '';




if($_POST) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $postal_code = $_POST['postal_code'];
    $city = $_POST['city'];
    $type = $_POST['type'];
    $price = $_POST['price'];

    foreach($_POST as $keys => $valeur) {
        $_POST[$keys] = htmlspecialchars(addslashes($valeur));
    }


    if(empty($title) || empty($description) || empty($postal_code) || empty($city) || empty($type)) {
        $err .= '<div class="alert alert-danger">Veuillez remplir tous les champs</div>';
    }

    // Insérer le bien dans la base de donnée
    if(empty($err)) {
        $pdo->query("INSERT INTO advert (title, description, postal_code, city, type, price) VALUES ('$title', '$description', '$postal_code', '$city', '$type', $price)");
    $content .= $err;
    } 
}



?>


<!-- PARTIE AFFICHAGE -->




<?php echo $content; ?>

<form  action="" method="POST" class="vh-100 gradient-custom">
<div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Ajout d'un bien</h3>
            <form>

            <div class="row">
                <div class="col-md-6 mb-4">

                <div class="form-outline">
                    <label class="form-label" for="title">Titre de l'annonce</label>
                    <input type="text" id="title" class="form-control form-control-lg" name="title"/>

                </div>

                </div>
                <div class="col-md-6 mb-4">

                <div class="form-outline">
                    <label class="form-label" for="description">Description du bien</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>

                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <label for="postal_code" class="form-label">Code postal du bien</label>
                    <input type="text" class="form-control" id="postal_code" name="postal_code">

                </div>

                </div>
                <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <label for="city" class="form-label">Ville du bien</label>
                    <input type="text" class="form-control" id="city" name="city">

                </div>
                
                </div>
            </div>

            



            <div class="row">
                
                <div class="col-md-6 mb-4">

                <h6 class="mb-2 pb-1">Type de bien</h6>

                <div class="form-check form-check-inline">
                <input type="radio" name="type" id="type" value="location" checked>
                Location
                <input type="radio" name="type" id="type" value="vente" checked>
                Vente
                </div>

                <div class="form-outline">
                    <label for="text" class="form-label">Prix</label>
                    <input type="text" class="form-control" id="price" name="price">

                </div>


                </div>
            </div>

            <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Valider" />
            </div>

            </form>
        </div>
        </div>
    </div>
    </div>
</div>
</form>

<?php require_once './inc/footer.inc.php'; ?>
