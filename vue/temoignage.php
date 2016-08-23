<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Administration témoignages</title>
</head>
<body>

<form name="edition" method="post" action="">
  <label>Titre</label>
  <input type="text" name="lenom" placeholder="Nom" required /><br/>
  <label>Email</label>
  <input type="text" name="lenom" placeholder="Nom" required /><br/>
  <label>Age</label>
  <input type="text" name="lenom" placeholder="Nom" required /><br/>
  <label>Profession</label>
  <input type="text" name="lenom" placeholder="Nom" required /><br/>
  <label>Contenu du témoignage</label>
  <textarea name="text" placeholder="Le témoignage"required ></textarea><br/>


    <input type="submit" name="edition" value='envoi'/>
</form>

</body>
</html>