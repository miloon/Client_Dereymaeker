<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
</head>
<body>
<?php
include ("vue/menu.php");
?>
<div>

  <form class="form" method="post" action="">
    <input type="text" name="lelogin" placeholder="Longin" required >
    <input type="password" name="lepass" placeholder="Mot de passe" required >
    <input type="submit" class="submit" value="Register">
  </form>

</div>
</body>
</html>