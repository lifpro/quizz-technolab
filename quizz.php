<?php

/**
 * Fonction qui retourne la liste complète des étudiants
 * @return array Tableau associatif avec les étudiants (prénom => nom)
 */
function getListeEtudiants() {
    return [
        ['prenom' => 'Aissata', 'nom' => 'BA'],
        ['prenom' => 'Moussa', 'nom' => 'Bagayoko'],
        ['prenom' => 'Dalanda', 'nom' => 'BALDE'],
        ['prenom' => 'Hamidou', 'nom' => 'CAMARA'],
        ['prenom' => 'Mamourou', 'nom' => 'Coulibaly'],
        ['prenom' => 'Fatoumata O', 'nom' => 'Coulibaly'],
        ['prenom' => 'Tam F', 'nom' => 'Coulibaly'],
        ['prenom' => 'Ruth K', 'nom' => 'Coulibaly'],
        ['prenom' => 'Habibatou N', 'nom' => 'Coulibaly'],
        ['prenom' => 'Mahamoud Ibrahima', 'nom' => 'COULIBALY'],
        ['prenom' => 'Fafa', 'nom' => 'DABITAO'],
        ['prenom' => 'Moustapha M', 'nom' => 'DAOU'],
        ['prenom' => 'Khady Seydou', 'nom' => 'DIAGNE'],
        ['prenom' => 'Ibrahima M', 'nom' => 'Diarra'],
        ['prenom' => 'Hatri', 'nom' => 'DICKO'],
        ['prenom' => 'Boursine', 'nom' => 'FALL'],
        ['prenom' => 'Toumani', 'nom' => 'Kanouté'],
        ['prenom' => 'Tiéido', 'nom' => 'KEITA'],
        ['prenom' => 'Dioman', 'nom' => 'KEITA'],
        ['prenom' => 'Bakary', 'nom' => 'MAGASSA'],
        ['prenom' => 'Haoussa Gao M', 'nom' => 'Maiga'],
        ['prenom' => 'Ismaila', 'nom' => 'Maiga'],
        ['prenom' => 'Awa', 'nom' => 'SACKO'],
        ['prenom' => 'Assitan', 'nom' => 'SIDIBE'],
        ['prenom' => 'Ibrahima', 'nom' => 'SIDIBE'],
        ['prenom' => 'Sanoussi', 'nom' => 'TANGARA'],
        ['prenom' => 'Mohamed', 'nom' => 'Tounkara'],
        ['prenom' => 'Abdoulaye', 'nom' => 'Touré'],
        ['prenom' => 'Mariam', 'nom' => 'Traoré'],
        ['prenom' => 'Amadou', 'nom' => 'Yalcouyé'],
        ['prenom' => 'Lassine', 'nom' => 'Bagayoko'],
        ['prenom' => 'Mohamed Issa', 'nom' => 'Cissé'],
        ['prenom' => 'Mamary', 'nom' => 'Coulibaly'],
        ['prenom' => 'Souleymane', 'nom' => 'Coulibaly'],
        ['prenom' => 'Hubert H', 'nom' => 'Danfaga'],
        ['prenom' => 'Aicha', 'nom' => 'Dembélé'],
        ['prenom' => 'Boubacar Sidiki', 'nom' => 'Dembélé'],
        ['prenom' => 'Isaa', 'nom' => 'Diabaté'],
        ['prenom' => 'Abooubacar', 'nom' => 'Diakite'],
        ['prenom' => 'Moussa', 'nom' => 'Diakité'],
        ['prenom' => 'Sababou', 'nom' => 'Diakité'],
        ['prenom' => 'Abdoulaye', 'nom' => 'Diallo'],
        ['prenom' => 'Mamadou', 'nom' => 'Diallo'],
        ['prenom' => 'Aboubacar Dofing', 'nom' => 'Diarra'],
        ['prenom' => 'Alassane Alpha', 'nom' => 'Diarra'],
        ['prenom' => 'Alpha', 'nom' => 'Diarra'],
        ['prenom' => 'Aminata Moustapha', 'nom' => 'Diarra'],
        ['prenom' => 'Awa', 'nom' => 'Diarra'],
        ['prenom' => 'Bandiougou', 'nom' => 'Diarra'],
        ['prenom' => 'Katigui', 'nom' => 'Diarra'],
        ['prenom' => 'Moussa', 'nom' => 'DIARRA'],
        ['prenom' => 'Nana', 'nom' => 'Diawarra'],
        ['prenom' => 'Mahamadou Ibrahima', 'nom' => 'Doumbia'],
        ['prenom' => 'Aboubacar', 'nom' => 'DOUMBIA'],
        ['prenom' => 'Hamidou', 'nom' => 'Guindo'],
        ['prenom' => 'Amadou dit Barou', 'nom' => 'Kanouté'],
        ['prenom' => 'Awa', 'nom' => 'Keita'],
        ['prenom' => 'Cheick Oumar', 'nom' => 'Keita'],
        ['prenom' => 'Massaran L', 'nom' => 'Koné'],
        ['prenom' => 'Aichata', 'nom' => 'Kouyaté'],
        ['prenom' => 'Badara Aly', 'nom' => 'Magassa'],
        ['prenom' => 'Amara', 'nom' => 'Magassouba'],
        ['prenom' => 'Awa dite Neh', 'nom' => 'Maiga'],
        ['prenom' => 'Mahamadou Alassane', 'nom' => 'Maiga'],
        ['prenom' => 'Rokia', 'nom' => 'Maiga'],
        ['prenom' => 'Cheick Oumar', 'nom' => 'N\'dongo'],
        ['prenom' => 'Kadiatou', 'nom' => 'Ouattara'],
        ['prenom' => 'Makan', 'nom' => 'Sangaré'],
        ['prenom' => 'Séga', 'nom' => 'Sissoko'],
        ['prenom' => 'Sory I', 'nom' => 'Sissoko'],
        ['prenom' => 'Fatoumata Bintou', 'nom' => 'Touré'],
        ['prenom' => 'Alassane', 'nom' => 'Traore'],
        ['prenom' => 'Adiara', 'nom' => 'Traoré'],
        ['prenom' => 'Aissata', 'nom' => 'Traoré'],
        ['prenom' => 'Thièmoko N\'tji', 'nom' => 'Traoré'],
    ];
}

/**
 * Fonction qui choisit de manière aléatoire un étudiant pour répondre à une question
 * @param string $format Format de retour : 'complet' (prénom + nom), 'prenom', 'nom', ou 'array' (tableau associatif)
 * @return string|array Retourne l'étudiant sélectionné selon le format demandé
 */
function choisirEtudiantAleatoire($format = 'complet') {
    $etudiants = getListeEtudiants();
    
    // Vérifier que la liste n'est pas vide
    if (empty($etudiants)) {
        return null;
    }
    
    // Sélectionner un index aléatoire
    $indexAleatoire = array_rand($etudiants);
    $etudiantSelectionne = $etudiants[$indexAleatoire];
    
    // Retourner selon le format demandé
    switch ($format) {
        case 'prenom':
            return $etudiantSelectionne['prenom'];
        
        case 'nom':
            return $etudiantSelectionne['nom'];
        
        case 'array':
            return $etudiantSelectionne;
        
        case 'complet':
        default:
            return $etudiantSelectionne['prenom'] . ' ' . $etudiantSelectionne['nom'];
    }
}

/**
 * Exemple d'utilisation de la fonction
 */
// echo "Étudiant sélectionné : " . choisirEtudiantAleatoire() . "<br>";
// echo "Prénom seulement : " . choisirEtudiantAleatoire('prenom') . "<br>";
// echo "Nom seulement : " . choisirEtudiantAleatoire('nom') . "<br>";
// 
// $etudiant = choisirEtudiantAleatoire('array');
// echo "Tableau : " . print_r($etudiant, true) . "<br>";

?>

