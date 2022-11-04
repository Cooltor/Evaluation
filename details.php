<!-- PARTIE TRAITEMENT -->

<?php require_once './inc/header.inc.php'; ?>



<?php

// Affichage des infos d'un bien en fonction de son prix
if (isset($_GET['action']) && $_GET['action'] == 'detail') {

    $bien = $pdo->query("SELECT * FROM advert WHERE price = '$_GET[price]'");

    $info = $bien->fetch(PDO::FETCH_ASSOC);
    $content .= '<div class="container"><div class="row"><div class="col-4">';
    $content .= '<div class="card"><div class="card-body text-center">';
    $content .= "<h5 class=\"card-title\">$info[title]</h5>";
    $content .= "<h6 class=\"card-subtitle mb-2 text-muted\">$info[price] € à $info[city]  ($info[postal_code])</h6>";
    $content .= "<p class=\"card-text\">Description : $info[description]</p>";
    $content .= '</div></div></div></div></div>';
}




?>
















<!-- PARTIE AFFICHAGE -->

<?php echo $content; ?>

<?php require_once './inc/footer.inc.php'; ?>