<link rel="stylesheet" href="admin_styles/styles_admin.css">

<?php
session_start();

if($_SESSION['username']){
    if(isset($_GET['id']) &&!empty($_GET['id'])) {
        require_once('db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql ='SELECT*FROM `projets` WHERE `idprojets`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query ->execute();
        $result = $query->fetch();
        /* var_dump($result); */
        echo'ça marche <br>';
    }else{
        echo'id manquante';
    }
}else{
    echo'identifiez-vous';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="../assets/images/admin_logo/<?= $result['projets_logo'] ?>" class='projects_details--logo'>
<?=$result['projets_title']?> <br>
<img src="../assets/images/admin_img/<?= $result['projets_image'] ?>" class='projects_details--image'><br>
<?=$result['projets_context']?> <br>
<?=$result['projets_date_debut']?> <br>
<?=$result['projets_date_fin']?> <br>
<?=$result['projets_specs']?> <br>
<?=$result['projets_lien_github']?> <br>
<?=$result['projets_lien_projet']?> <br>

<a href="projects-edit.php?id=<?=$result['idprojets']?>">Modifier le Projet <?=$result['projets_title']?></a><br>
<a href="projects-delete.php?id=<?=$result['idprojets']?>">Supprimer <?=$result['projets_title']?></a>
<a href="home.php"><button>Retour</button></a>

</body>
</html>

