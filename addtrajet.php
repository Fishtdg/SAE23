<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Créer un Trajet</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="covoiturage.php">Covoiturage</a></li>
            <li><a href="planning.php">Planning</a></li>
            <li><a href="carte.php">Carte</a></li>
        </ul>
    </nav>
    <body>
        <h1>Créer un Trajet</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $departure = htmlspecialchars($_POST['departure']);
            $destination = htmlspecialchars($_POST['destination']);
            $date = htmlspecialchars($_POST['date']);
            $time = htmlspecialchars($_POST['time']);
            $seats = intval($_POST['seats']);

            // Example: Save the data to a database or process it
            // For now, just display the submitted data
            echo "<p>Trajet créé avec succès :</p>";
            echo "<ul>";
            echo "<li><strong>Lieu de départ :</strong> $departure</li>";
            echo "<li><strong>Destination :</strong> $destination</li>";
            echo "<li><strong>Date :</strong> $date</li>";
            echo "<li><strong>Heure :</strong> $time</li>";
            echo "<li><strong>Places disponibles :</strong> $seats</li>";
            echo "</ul>";
        } else {
        ?>
        <form action="" method="POST">
            <label for="departure">Lieu de départ :</label>
            <input type="text" id="departure" name="departure" placeholder="Entrez le lieu de départ" required>

            <label for="destination">Destination :</label>
            <input type="text" id="destination" name="destination" placeholder="Entrez la destination" required>

            <label for="date">Date :</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Heure :</label>
            <input type="time" id="time" name="time" required>

            <label for="seats">Places disponibles :</label>
            <input type="number" id="seats" name="seats" min="1" placeholder="Entrez le nombre de places disponibles" required>
            <button type="submit">Créer le Trajet</button>
        </form>
        <?php
        }
        ?>
        <br>
        <a href="covoiturage.php"><button type="button">Retour</button></a>
    </body>
</html>