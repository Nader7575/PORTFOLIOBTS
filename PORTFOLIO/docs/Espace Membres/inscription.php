<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;', 'root', ''); 
if(isset($_POST['envoi'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp)VALUES(?, ?)');
        $insertUser->execute(array($pseudo, $mdp));

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp));
        if($recupUser->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location: connexion.php');
        }

        
    
    }else{
        echo "Veuillez compléter tous les champs...";
    }
}
?>
<!DOCTYPE html>
<html> 
<head>
    <title>Inscription</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="inscription.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- <form method="POST" action=""> 

    <input type="text" name="pseudo" autocomplete="off">
    <br>
    <input type="password" name="mdp" autocomplete="off">

    <br><br>

    <input type="submit" name="envoi">

</form> -->

<!-- ddd -->

<main class="container">
        <div class="signup-section">
            <h2>Inscription</h2>
            <form method="POST" action="">
            <img src="https://cdn.pixabay.com/photo/2016/09/16/09/20/books-1673578_1280.png" alt="Livre" class="livre-image">
                <input type="text" name="pseudo" placeholder="email" >
                <!-- <input type="email" name="email" id="email" placeholder="Adresse e-mail"> -->
                <input type="password" name="mdp" placeholder="mot de passe">
                
                <button type="submit" name="envoi">S'inscrire</button>
            </form>
        </div>
    

</body>
</html>

<!-- ddd -->

