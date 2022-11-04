<!-- PARTIE TRAITEMENT -->

<?php require_once 'inc/header.inc.php'; 

// Affichage des infos d'un bien en fonction de son prix 
$res = $pdo->query("SELECT title, description, postal_code, city, type, price FROM advert");

echo '<table class=" table table-striped" border=\'2\'><tr>';

for($i = 0; $i < $res->columnCount(); $i++)
{
    $colonne = $res->getColumnMeta($i);
    echo "<th>".$colonne['name']."</th>";
}

echo '<th>Détails</th>';
echo '</tr>';

//$titles = $pdo->query("SELECT * FROM advert");


while($ligne = $res->fetch(PDO::FETCH_ASSOC))
{
    echo '<tr>';
        foreach($ligne as $key=>$info) {

                echo "<td>$info</td>";
            }
        echo "<td class=\"align-middle\"><a href=details.php?action=detail&price=$ligne[price]>Info</a></td>";
}




$content .= '</table>';



?>


<!-- PARTIE AFFICHAGE -->



<h1 class="text-center"> Annonces </h1>

<?php echo $content; ?></div>
    </div>
</div>






<?php require_once 'inc/footer.inc.php'; ?>