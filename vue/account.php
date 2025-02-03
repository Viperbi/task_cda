<section>
    <h1>Inscription</h1>
    <form action="" method="post">
        <input type="text" name="lastname" placeholder="Le Nom de Famille">
        <input type="text" name="firstname" placeholder="Le Prénom">
        <input type="text" name="email" placeholder="L'Email'">
        <input type="password" name="password" placeholder="Le Mot de Passe">
        <input type="submit" name="submitSignUp">
    </form>
    <p><?php echo $message ?></p>
</section>
<section>
    <h1>Liste d'Utilisateurs</h1>
    <ul>
        <?php echo $listUsers ?>
    </ul>
</section>
<section>
        <h2>Connexion</h2>
        <form method="POST">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required><br>
            
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required><br>
            
            <button type="submit" name="login">Se connecter</button>
        </form>
        <?php echo $messageConnexion ?>
</section>