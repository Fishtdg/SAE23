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
            <section class="fonctionnalites">
                <article>
                    <h3>Cartographie</h3>
                    <p>Visualisez la localisation de vos camarades et des véhicules disponibles.</p>
                </article>
                <article>
                    <h3>Planning</h3>
                    <p>Consultez et planifiez vos trajets en fonction de vos horaires.</p>
                </article>
                <article>
                    <h3>Mise en contact</h3>
                    <p>Rejoignez ou modifiez des équipages pour optimiser vos déplacements.</p>
                </article>
            </section>
        </div>
    </div>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Covoiturage App. Tous droits réservés on god.</p>
    </footer>
</body>
</html>
