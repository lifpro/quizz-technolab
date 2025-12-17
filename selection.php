<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technolab QUIZZ - Sélection d'étudiant</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 3rem;
            max-width: 600px;
            width: 100%;
            text-align: center;
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            color: #667eea;
            margin-bottom: 1rem;
            font-size: 2rem;
        }

        .subtitle {
            color: #666;
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .etudiant-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2.5rem;
            border-radius: 15px;
            margin: 2rem 0;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.02);
            }
        }

        .etudiant-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        .etudiant-nom {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 1rem 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .etudiant-details {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-top: 0.5rem;
        }

        .btn-container {
            margin-top: 2rem;
        }

        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.6);
        }

        .btn:active {
            transform: translateY(-1px);
        }

        .info-box {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin-top: 2rem;
            border-left: 4px solid #667eea;
        }

        .info-box p {
            color: #666;
            margin: 0.5rem 0;
        }
    </style>
</head>
<body>
    <?php
    // Inclure le fichier avec les fonctions
    require_once 'quizz.php';
    
    // Sélectionner un étudiant aléatoire
    $etudiant = choisirEtudiantAleatoire('array');
    $nomComplet = $etudiant['prenom'] . ' ' . $etudiant['nom'];
    $totalEtudiants = count(getListeEtudiants());
    ?>
    
    <div class="container">
        <h1>🎯 Sélection d'Étudiant</h1>
        <p class="subtitle">Étudiant choisi pour répondre à la question</p>
        
        <div class="etudiant-card">
            <div class="etudiant-icon">👤</div>
            <div class="etudiant-nom"><?php echo htmlspecialchars($nomComplet); ?></div>
            <div class="etudiant-details">
                <div><strong>Prénom:</strong> <?php echo htmlspecialchars($etudiant['prenom']); ?></div>
                <div><strong>Nom:</strong> <?php echo htmlspecialchars($etudiant['nom']); ?></div>
            </div>
        </div>
        
        <div class="btn-container">
            <a href="selection.php" class="btn">🔄 Choisir un autre étudiant</a>
        </div>
        
        <div class="info-box">
            <p><strong>ℹ️ Information:</strong></p>
            <p>Total d'étudiants dans la liste: <strong><?php echo $totalEtudiants; ?></strong></p>
            <p>La sélection est effectuée de manière aléatoire et équitable.</p>
        </div>
    </div>
</body>
</html>





