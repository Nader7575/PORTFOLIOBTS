<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!-- //dds -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="./app.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- <a href="deconnexion.php">
        <button>Se déconnecter</button>
    </a>
   
    <h1>Sport</h1>
    <div class="cards"></div> -->

   
    <header>
    <a href="deconnexion.php"  id="logout">
        <button>Se déconnecter</button>
    </a>
            <h1>API Books</h1>
        </header>
        <nav>
            <!-- Ajouter des liens de navigation ici si nécessaire -->
        </nav>
        <main>
            <section class="cards">
                <!-- Ajouter le contenu ici pour afficher les livres -->
            </section>
        </main>
        <!-- Ajoutez cet élément ul à votre page HTML -->
<ul id="genre-list"></ul>

        <footer>
            <p>&copy; 2023 API Books</p>
        </footer>


</body>
</html>