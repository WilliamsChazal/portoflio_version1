<?php
session_start();

if($_SESSION['username']){
            if($_POST){
                if(
                isset($_POST['idprojets']) &&!empty($_POST['idprojets'])&&
                isset($_POST['project_title'])&&!empty($_POST['project_title'])&&
                isset($_POST['project_begin'])&&!empty($_POST['project_begin'])&&
                isset($_POST['project_end'])&&!empty($_POST['project_end'])&&
                isset($_POST['project_context'])&&!empty($_POST['project_context'])&&
                isset($_POST['project_specs'])&&!empty($_POST['project_specs'])&&
                isset($_POST['project_githublink'])&&!empty($_POST['project_githublink'])&&
                isset($_POST['project_link'])&&!empty($_POST['project_link'])
            ){
            
            require_once("db-connect.php");
            $id=strip_tags($_POST['idprojets']);
            $title =strip_tags($_POST['project_title']);
            $begin =strip_tags($_POST['project_begin']);
            $end =strip_tags($_POST['project_end']);
            $context =strip_tags($_POST['project_context']);
            $specs =strip_tags($_POST['project_specs']);
            $githublink =strip_tags($_POST['project_githublink']);
            $projetlink =strip_tags($_POST['project_link']);
        
            $sql ='UPDATE `projets` SET `projets_title`=:projets_title, `projets_date_debut`=:projets_date_debut, `projets_date_fin`=:projets_date_fin, `projets_context`=:projets_context, `projets_specs`=:projets_specs, `projets_lien_github`=:projets_lien_github, `projets_lien_projet`=:projets_lien_projet WHERE `idprojets`=:idprojets';


            $query = $db ->prepare($sql);

            $query->bindValue(':idprojets', $id, PDO::PARAM_INT);
            $query->bindValue(':projets_title', $title, PDO::PARAM_STR);
            $query->bindValue(':projets_date_debut', $begin, PDO::PARAM_STR);
            $query->bindValue(':projets_date_fin', $end, PDO::PARAM_STR);
            $query->bindValue(':projets_context', $context, PDO::PARAM_STR);
            $query->bindValue(':projets_specs', $specs, PDO::PARAM_STR);
            $query->bindValue(':projets_lien_github', $githublink, PDO::PARAM_STR);
            $query->bindValue(':projets_lien_projet', $projetlink, PDO::PARAM_STR);
            $query->execute();
            echo 'Sucess';

            $sql ='SELECT*FROM `projets` WHERE `idprojets`=:id';
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_STR);
            $query ->execute();
            $result = $query->fetch();


?>
        <a href="projects-details.php?id=<?php echo $result['idprojets'];?>"><button>Retour</button></a>

        <?php
        }else{
            echo 'Remplissez tous les champs';echo '<br><a href=home.php> Retour </a>';}

    }else{
        echo 'l\'Url n\'est pas valide';
    }
}else{
    echo 'Vous n\'êtes pas identifiez';
}
    
