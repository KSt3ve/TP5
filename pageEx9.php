<?php
    session_start();
    echo "Bonjour ".$_SESSION['Nom'].'<br>';
    echo "T'a première connexion était le ".$_SESSION['Date'].'<br>';
?>

<a href="<?php echo $_SESSION['Site'] ?>">Cliquer pour ouvrir votre site préféré</a>
