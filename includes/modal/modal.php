<?php
    if(isset($_GET['id']) &&!empty($_GET['id'])) {
        require_once('../../admin/db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql ='SELECT*FROM `projets` WHERE `idprojets`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query ->execute();
        $result = $query->fetch();
        /* var_dump($result); */
    }else{
        echo'id manquante';
    }
?>

    <div class="modal_projects--cards--titre"><h3><?=$result['projets_title']?></h3></div>

       

    <div class="modal_projects--cards--image"><img src="assets/images/admin_img/<?=$result['projets_image']?>" alt="" class='modal_image'></div>

    <div class="modal_projects--cards--texte"><?=$result['projets_context']?></div>

    <div class="modal_projects--cards--texte"><?=$result['projets_specs']?></div>
        
    <div class="modal_projects--cards--lien-git"><a href="<?=$result['projets_lien_github']?>" target="_blank" rel="noopener noreferrer"><img src="assets/images/github.png" alt="logo-github" id='github'><span>GitHub du projet</span></></a></div>

    <div class="modal_projects--cards--lien-site" ><a href="<?=$result['projets_lien_projet']?>" target="_blank"> <input type="button" value="Voir le site" id='modalt--button'></a></div>
      
    





