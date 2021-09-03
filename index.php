<?php
    require_once('admin/db-connect.php');
    $_sql = 'SELECT * FROM `projets`';
    $query = $db->prepare($_sql);
    $query ->execute();
    $result = $query->fetchALL(PDO::FETCH_ASSOC);
?>


<?php include ('header.php')?>
<?php include ('includes/navbar/navbar.php')?>
<section class="container_socials">
<?php include ('includes/socials/socials.php')?>
</section>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

            <section class='main'>
                <span>
            <?php include ('sections/landing/landing.php')?>
            </span>
            </section>
            <section class="about-me" id="about-me_ancre">
            <?php include ('sections/about-me/about-me.php')?>
            </section>

            <section >
                <?php include ('sections/skills/skills.php')?></section>

            <section class='portfolio' id="projet_ancre">
            <?php include ('sections/projets/projets.php')?>
            <div class='casse-brique_mobile'>
                <div><h3>Casse-Briques</h3></div>
                 <div><p>Utiliser un ordinateur pour pouvoir jouer au casse brique</p></div>
                
            </div>
            <div class='casse-brique'>
            <?php include ('includes/casse-brique/casse_brique.html')?>
            </div>
            </section>

            <section class='contact' id="contact_ancre">
            <div class="contact_titre"><h3>Contactez moi</h3></div>
            <div class="contact_texte"><p>Pour en savoir plus sur mes réalisations ainsi que mes prestations n'hésiter pas à me contacter.<br>Je serais ravi de pouvoir travailler sur NOS futurs projets.</p></div>
                 <div class="container_contact">
                    <div class="storySet"><img src="assets/images/message.gif" alt="" srcset="<a href="https://storyset.com/">Illustrations by Storyset</a>"></div>
                    <div class="form">
                        <?php include ('includes/contact-form/index.php')?>
                    </div>
                 </div>
            </section>

    <?php include ('includes/footer/footer.php')?>
    
  <script src="scripts/main.js"></script>
  <script src="includes/casse-brique/casse_brique.js"></script>  
  <script src="sections/projets/projets.js"></script>
</body>
</html>




                