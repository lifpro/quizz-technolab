<?php
$user="";
if(isset($_COOKIE['username'])){
    $user=$_COOKIE['username'];
}

?>
<header>
    <nav>
        <div class="logo">Technolab QUIZZ</div>
        <ul class="nav-links">
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="inscription.php?nom=TRAORE&prenom=Ousmane">Inscription</a></li>
            <li><a href="contact.php">Nous contacter</a></li>
        <!-- <li><?php echo $user?></li> -->
            <li><?php echo $_SESSION['userconnecte']?></li>
        </ul>
    </nav>
</header>