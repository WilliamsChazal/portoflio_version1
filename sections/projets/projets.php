
<section class='portfolio' id="portfolio_ancre">
        <h2>Portfolio</h2>
        
            <div class="portfolio_projects--container">
            <?php
                foreach ($result as $projet) {
            ?>
                <div class="portfolio_projects--cards">
                <div class="portfolio_projects--cards--titre"><h3><?=$projet['projets_title']?></h3></div>
                    <div class="portfolio_projects--cards--image"><img src="assets/images/admin_logo/<?=$projet['projets_logo']?>" alt="" class="projet_image--size" id='image'></div>
                    <div class="portfolio_projects--cards--texte"><?=$projet['projets_context']?>
                    </div>
                    <div class="portfolio_projects--cards--btn" id='btn_modal'><a onclick='openModal(<?=$projet["idprojets"]?>)'><button class="projet_button"> voir le projet </button></a></div>

                </div>

                <?php
                    }
                ?>

        </div>
<div id="myModal" class="modal">

<!-- Modal content -->

<div class="modal-content" >
  <span class="close">&times;</span>
  <div class="modal_projet" id="demo">

  <?php include ('includes/modal/modal.php')?>



</div>

    </section>
