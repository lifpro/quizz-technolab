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

    <!-- Hero Section -->
    <section class="hero" id="accueil">
        <div class="hero-content">
            <h1><?php echo "Bienvenue sur le QUIZZ de Technolab"; ?></h1>
            <p><?php echo "Testez vos connaissances avec nos quiz passionnants et interactifs !"; ?></p>
            <div class="cta-buttons">
                <a href="selection.php" class="btn btn-primary">🎯 Commencer le Quiz</a>
                <a href="#features" class="btn btn-secondary">Découvrir plus</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <h2 class="section-title">Pourquoi choisir Technolab QUIZZ ?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>Sélection Aléatoire</h3>
                <p>Système de sélection équitable et aléatoire des étudiants pour répondre aux questions du quiz.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Suivi des Scores</h3>
                <p>Suivez les performances de chaque étudiant et analysez les résultats en temps réel.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">❓</div>
                <h3>Questionnaires Variés</h3>
                <p>Créez et gérez vos questionnaires personnalisés pour tester les connaissances de vos étudiants.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">👥</div>
                <h3>Gestion des Utilisateurs</h3>
                <p>Administrez facilement la liste des étudiants et leurs informations.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Interface Moderne</h3>
                <p>Design moderne et intuitif pour une expérience utilisateur optimale.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>Responsive</h3>
                <p>Accessible sur tous les appareils : ordinateur, tablette et mobile.</p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stats-grid">
            <div class="stat-item">
                <h3>78+</h3>
                <p>Étudiants</p>
            </div>
            <div class="stat-item">
                <h3>100%</h3>
                <p>Sélection Aléatoire</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>Disponible</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include("footer.php"); ?>
</body>

</html>