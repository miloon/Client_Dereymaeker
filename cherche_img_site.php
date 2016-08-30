<?php
if(isset($_POST['img'])){
  var_dump($_POST['img']);
  $ext = strrchr($_POST['img'],".");
  copy($_POST['img'],"./".date("y-m-d-H-i-s").mt_rand(11111,99999).$ext);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>titre</title>
</head>
<body>
<h1>Titre</h1>
<?php
$url="http://www.lalibre.be/economie/digital/google-envisagerait-de-remanier-youtube-pour-en-faire-un-reseau-social-57c0ae2435709a310568bca7";
$ouvre = file_get_contents($url);
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $ouvre, $matches);
//$first_img = $matches[1][0];
// echo "<img src='$first_img'' alt=''/>";

foreach($matches[1] as $resultat){
  echo "<img src='$resultat' whidth=50 height=50 alt='' onclick='document.getElementById(\"img\").value=\"$resultat\" ;'/>";
}

?>
<form action="" method="post" name="image">
<input name="img" id="img"/>
<input type="submit" value="copie image"></form>
</body>
</html>