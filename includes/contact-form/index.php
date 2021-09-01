<div class="contact_form">
<form action="form.php" method="post">
        <div>
            <label for="sujet" class='sujet'>Sujet :</label>
            <input type="text" id="sujet" name="user_sujet">
        </div>

        <div>
            <label for="mail">Votre mail :</label>
            <input type="email" id="mail" name="user_mail" >
        </div>
        
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message">Rédiger votre message dans ce champs</textarea>
        </div>
        <div>
        <button type="submit" class='button'>Envoyer le message</button>
        </div>
    
    </form>
    </div>