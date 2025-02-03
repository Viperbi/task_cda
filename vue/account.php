<section>
        <h2>Créer un compte</h2>
        <form action="" method="post">
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="lastname" required><br>
            
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" required><br>
            
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required><br>
            
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required><br>
            
            <input type="submit" name="submit" value="Créer un compte">
        </form>
        <?= $messageAccount ?>
</section>

<section>
    <?php
        echo $users;
    ?>
</section>