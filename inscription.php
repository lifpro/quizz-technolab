<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technolab QUIZZ - Testez vos connaissances</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <!-- Header -->
    <?php include("header.php"); ?>

    <section id="inscription">
        <div class="form-container">
            <h2 class="section-title">Formulaire d'inscription</h2>
            <form action="inscription_action.php" method="POST" class="inscription-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" required />
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="exemple@email.com" required />
                </div>
                
               
                
                <div class="form-group checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" name="newsletter" id="newsletter" value="1" />
                        <span>S'inscrire à la newsletter</span>
                    </label>
                </div>
                <div class="form-group">
                    <label for="email">Charger votre cv</label>
                    <input type="file" name="cv" id="cv"  required />
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <?php include("footer.php"); ?>
</body>

</html>