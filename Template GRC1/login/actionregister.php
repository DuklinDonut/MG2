<?php
if (isset($_POST['register']))
{
    if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['password']))
    {
        if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['password']))

        {
            $name=htmlspecialchars($_POST['name']);
            $email=htmlspecialchars($_POST['email']);
            $password=htmlspecialchars($_POST['password']);
            echo "<h2> Compte Bien Créé </h2>";
        }
    }
}

?>


