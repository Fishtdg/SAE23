<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="covoiturage.php">Covoiturage</a></li> <!-- Main page pour le covoiturage -- User peut voir ses trajets et les modifier -->
            <li><a href="planning.php">Planning</a></li> <!-- On peut ajouter qqc pour utiliser l'API Google Calendar la -->
            <li><a href="carte.php">Carte</a></li> <!-- On peut ajouter qqc pour utiliser l'API Google Maps ? -->
        </ul>
    </nav>
    <div>
        <div>
            <section>
                <h2>Ajouter un trajet</h2>
                <p>Vous pouvez ajouter un nouveau trajet en cliquant sur le bouton ci-dessous :</p>
                <a href="addtrajet.php" class="button">Ajouter un trajet</a>
            </section>
        </div>
    </div>
</body>
</html>