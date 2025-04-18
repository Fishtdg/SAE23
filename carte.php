<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carte - Covoiturage App</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        /* Style simple pour la carte */
        #map {
            height: 500px;
            width: 100%;
            margin: 20px auto;
            border: 1px solid #ccc;
        }
    </style>
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
    
    <h1>Visualisez la répartition des domiciles et des véhicules</h1>
    <!-- Conteneur pour la carte -->
    <div id="map"></div>
    
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Covoiturage App. Tous droits réservés.</p>
    </footer>
    
    <!-- Script : Initialisation de la carte -->
    <script>
        function initMap() {
            // Exemple : Coordonnées de Montbéliard
            var montbeliard = { lat: 47.4797, lng: 6.8574 };
            
            // Création de la carte centrée sur Montbéliard avec un zoom adapté
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: montbeliard
            });
            
            // Ajout d'un marqueur sur la carte
            var marker = new google.maps.Marker({
                position: montbeliard,
                map: map,
                title: 'Montbéliard'
            });
        }
    </script>
    
    <!-- Chargez l'API Google Maps en remplaçant VOTRE_API_KEY par votre clé personnelle -->
    <script async defer 
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqbaLmLyqyllTnspI_PRtBkcXxYYp1EO4&callback=initMap">
    </script>
</body>
</html>
