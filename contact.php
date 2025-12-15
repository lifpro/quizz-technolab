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

    <section id="contact">
        <h2 class="section-title">Formulaire de contact</h2>
        <div>
            <form action="contact_action.php" method="POST">
                <label>Nom</label>
                <input type="text" name="nom" id="nom" required />
                </br></br>
                <label>Email</label>
                <input type="email" name="email" id="email" required />
                </br></br>
                <label>Message</label>
                <textarea row="5" name="message" id="message" required></textarea>
                </br></br>
                <button type="submit">Envoyer</button>
            </form>
        </div>

    </section>

    <!-- Footer -->
    <?php include("footer.php"); ?>
</body>

</html>